<?php

namespace App\Http\Controllers\destination;

use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    //
    public function destinationIndex()
    {
        return view('layout.destination');
    }
}
