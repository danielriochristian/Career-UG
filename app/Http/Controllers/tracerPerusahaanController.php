<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tracerPerusahaanController extends Controller
{
  public function index(){
    return view('frontend.tracer_perusahaan');
  }
}
