<?php


namespace app\Http\Controllers;


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


use Illuminate\Support\Facades\URL;
use Session, View, Response, Auth, Mail, Validator;
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
        $periods = array( 'hour' => 3600,'minute' => 60);
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
        if(isset($inputs['search']))
        {
            $flights = Flight::query()->orderBy('created_at','DESC')->where('name', 'like', '%' . $inputs['search'] . '%')
                ->get()->each(function($flight){
                    $flight->tempo = $this->time2string(strtotime(date('y-m-d H:i:s'))-strtotime($flight->created_at));
                }
                );
        }else {
            $flights = Flight::query()->orderBy('created_at', 'DESC')
                ->get()->each(function($flight){
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
        $destinationFileName = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(
           public_path(), $destinationFileName);
        $flight->picture =  $destinationFileName;
        $affiliatepic1 = $request->file('affiliatepic1')->getClientOriginalName();
        $request->file('affiliatepic1')->move(
            public_path().'/'.(Flight::all()->last()->id+1), $affiliatepic1);
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
        $destinationFileName = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(
            public_path(), $destinationFileName);
        $flight->picture =  $destinationFileName;
        $affiliatepic1 = $request->file('affiliatepic1')->getClientOriginalName();
        $request->file('affiliatepic1')->move(
            public_path(), $affiliatepic1);
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



}