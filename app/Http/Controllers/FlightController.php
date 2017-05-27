<?php


namespace app\Http\Controllers;


use App\Contact;
use App\Flight;
use App\Http\Controllers\Controller;
use App\Lib\Reports\ReportCar;
use Box\Spout\Writer\Style\Color;
use Box\Spout\Writer\Style\StyleBuilder;
use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use View, Response, Auth, Mail, Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;


/**
 * Class ListController
 * @package app\Http\Controllers\GitLab
 *
 * @property Request $request
 */
class FlightController extends Controller
{

    public function __construct(Request $request)
    {

    }

    private function time2string($timeline) {
        $periods = array( 'day' => 86400, 'hour' => 3600,'minute' => 60);
        $ret='';
        foreach($periods AS $name => $seconds){
            $num = floor($timeline / $seconds);
            $timeline -= ($num * $seconds);
            $ret .= $num.' '.$name.(($num > 1) ? 's' : '').' ';
        }

        return trim($ret);
    }

    public function Flights(Request $request)
    {
        $inputs = $request->all();

        if (isset($inputs['from']) and isset($inputs['to'])) {
            Session::forget('from');
            Session::forget('to');
            if($inputs['from'] == '')
            {
                Session::put('from',date('1999-01-01'));
            }else{
                Session::put('from',$inputs['from']);
            }
            if($inputs['to'] == '')
            {
                Session::put('to',date('2055-1-1'));
            }else{
                Session::put('to',$inputs['to']);
            }
        }

        if(Session::has('from') and Session::has('to') )
        {
            $from = date('Y-m-d', strtotime(Session::get('from')));
            $to = date('Y-m-d', strtotime(Session::get('to')));

        }else{
            $from = date('1999-01-01');
            $to = date('2055-01-01');
        }


        if(isset($inputs['search']))
        {

            $flights = Flight::query()->where('enddate','>',$from)->where('enddate','<',$to)->orderBy('created_at','DESC')->where('name', 'like', '%' . $inputs['search'] . '%')
                ->take(24)->get()->each(function($flight){
                    $flight->tempo = $this->time2string(strtotime(date('y-m-d H:i:s'))-strtotime($flight->created_at));
                }
                );
        }else {

            $flights = Flight::query()->where('enddate','>',$from)->where('enddate','<',$to)->where('created_at','>',Carbon::now()->subMonth(2))->orderBy('created_at', 'DESC')
                ->take(24)->get()->each(function($flight){
                    $flight->tempo = $this->time2string(strtotime(date('y-m-d H:i:s'))-strtotime($flight->created_at));
                }
                );
        }


       
        return view('flights/all', compact('flights'));
    }

    public function newFlight()
    {
        return view('flights/new');
    }

    public function createFlight(Request $request)
    {
        $inputs = $request->all();

        $flight = new Flight;
        $flight->name = $inputs['name'];
        $flight->description = $inputs['description'];
        $flight->enddate = $inputs['enddate'];
        $flight->price = $inputs['price'];
        $flight->zone=$inputs['zone'];
        $flight->country=$inputs['country'];
        $flight->url=$inputs['url'];
        $flight->facebookshare=$inputs['facebookshare'];
        $destinationFileName = $request->file('picture')->getClientOriginalName() . (Flight::all()->last()->id+1);
        $request->file('picture')->move(
            public_path().'/', $destinationFileName);
        $flight->picture =  $destinationFileName;
        $affiliatepic1 = $request->file('affiliatepic1')->getClientOriginalName() . (Flight::all()->last()->id+1).'afiliado';
        $request->file('affiliatepic1')->move(
            public_path().'/', $affiliatepic1);
        $flight->affiliatepic1 =  $affiliatepic1;
        $flight->save();


        return redirect('/');

    }






    public function highLightFlights()
    {
        $flights = Flight::all();

        return view('flights/highlights',compact('flights'));
    }

    public function showFlight($id)
    {
        $flight = Flight::where('id','=',$id)->first();
        $flight->tempo = $this->time2string(strtotime(date('y-m-d H:i:s'))-strtotime($flight->created_at));
        return view('flights/showflight',compact('flight'));
    }

    public function highlightFlight(Request $request)
    {
        $flightid = $request->get('flight');
        $flight = Flight::query()->where('id','=',$flightid)->first();
        if($flight->highlighted == 1)
        {
            $flight->highlighted = 0;
        }else{
            $flight->highlighted = 1;
        }
        $flight->save();
        
    }
    public function getByZone($zone)
    {

        $flights = Flight::query()->where('zone','=',$zone)->orderBy('created_at','DESC')->get()->each(function($flight){
            $flight->tempo = $this->time2string(strtotime(date('y-m-d H:i:s'))-strtotime($flight->created_at));
        }
        );


        return view('flights/all',compact('flights') );
    }

    public function editFlight($id)
    {
        $flight = Flight::where('id','=',$id)->first();

        return view('flights/edit',compact('flight') );
    }

    public function saveFlight(Request $request)
    {
        $inputs = $request->all();


        $flight = Flight::where('id','=',$inputs['flightid'])->first();
        $flight->name = $inputs['name'];
        $flight->description = $inputs['description'];
        $flight->enddate = $inputs['enddate'];
        $flight->price = $inputs['price'];
        $flight->zone=$inputs['zone'];
        $flight->country=$inputs['country'];
        $flight->url=$inputs['url'];
        $flight->facebookshare=$inputs['facebookshare'];
        $destinationFileName = $request->file('picture')->getClientOriginalName() . (Flight::all()->last()->id+1);
        $request->file('picture')->move(
            public_path().'/', $destinationFileName);
        $flight->picture =  $destinationFileName;
        $affiliatepic1 = $request->file('affiliatepic1')->getClientOriginalName() . (Flight::all()->last()->id+1).'afiliado';
        $request->file('affiliatepic1')->move(
            public_path().'/', $affiliatepic1);
        $flight->affiliatepic1 =  $affiliatepic1;

        $flight->save();

    }

    public function newFlights()
    {
        $flights = Flight::query()->orderBy('created_at','DESC')
            ->take(4)
            ->get();

        return json_encode($flights);
    }

    public function contactUs(Request $request)
    {
        $inputs = $request->all();
        $email = $inputs['email'];
        $message = $inputs['message'];

        $contact = new Contact();
        $contact->email = $email;
        $contact->message = $message;
        $contact->read = 0;
        $contact->save();
        return back();
    }

    public function contacts()
    {
        $contacts = Contact::where('read','=',0)->count();
        return $contacts;
    }

    public function allcontacts()
    {
        $contacts = Contact::all();

        return view('backoffice/contacts', compact('contacts'));

    }




}