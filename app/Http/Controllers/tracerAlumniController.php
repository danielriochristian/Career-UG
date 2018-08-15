<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tracerAlumniController extends Controller
{
  public function index(){
    return view('frontend.tracer_alumni');
  }
}
