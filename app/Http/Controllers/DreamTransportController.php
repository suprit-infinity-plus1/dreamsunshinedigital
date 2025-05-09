<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DreamTransportController extends Controller
{
    //
public function dreamTransport()
{
    return view('frontend.dreamtransport.dream-transport'); // This will return the category view
}
}
