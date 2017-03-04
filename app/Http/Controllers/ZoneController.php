<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ZoneController extends Controller
{
    public function __construct(Request $request)
    {

    }

    public function getByZone()
    {

        return view('zones/europe' );
    }
}
