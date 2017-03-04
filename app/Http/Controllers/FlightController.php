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

    public function Flights()
    {
        $flights = Flight::query()->orderBy('created_at','DESC')
            ->where('enddate','>',Carbon::now())->get();

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
        $destinationFileName = $flight->enddate.$flight->name.'.'.$request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->move(
           public_path(), $destinationFileName);
        $flight->picture =  $destinationFileName;

            $flight->save();

        return redirect()->action('FlightController@publicView');

    }

    public function view($id)
    {
        $flight = Flight::query()->where('id','=',$id)->first();


        return view('flights/view', compact('flight'));
    }


    public function publicView()
    {
//        $flights = Flight::query()
//        ->where('enddate','>',Carbon::today())
//        ->get()
//        ->sortBy('enddate')
//        ->take(4);
        $newflights=Flight::query()->orderBy('created_at','DESC')
            ->take(4)
            ->get();


        return view('flights/welcome',compact('newflights'));
    }

    public function highLightFlights()
    {
        $flights = Flight::all();

        return view('flights/highlights',compact('flights'));
    }

    public function showFlight($id)
    {
        $flight = Flight::where('id','=',$id)->first();

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

        $flights = Flight::query()->where('zone','=',$zone)->orderBy('created_at','DESC')->get();


        return view('flights/zone',compact('flights') );
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
        $destinationFileName = $flight->enddate.$flight->name.'.'.$request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->move(
            public_path(), $destinationFileName);
        $flight->picture =  $destinationFileName;

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