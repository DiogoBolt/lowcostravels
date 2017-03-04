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
        $flights = Flight::query()->get();
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
        $destinationFileName = $flight->enddate.$flight->name.'.'.$request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->move(
           public_path(), $destinationFileName);
        $flight->picture =  $destinationFileName;

            $flight->save();

    }

    public function view($id)
    {
        $flight = Flight::query()->where('id','=',$id)->first();


        return view('flights/view', compact('flight'));
    }


    public function publicView()
    {
        $flights = Flight::query()
        ->where('enddate','>',Carbon::today())
        ->get()
        ->sortBy('enddate')
        ->take(4);
        $newflights=Flight::query()->orderBy('created_at','DESC')
            ->take(4)
            ->get();


        return view('flights/welcome',compact('flights','newflights'));
    }

    public function highLightFlights()
    {
        $flights = Flight::all();

        return view('flights/highlights',compact('flights'));
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

        $flights = Flight::query()->where('zone','=',$zone)->get();


        return view('flights/europe',compact('flights') );
    }



}