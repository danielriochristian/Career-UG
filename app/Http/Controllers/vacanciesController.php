<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vacanciesController extends Controller
{
  public function index(){
    return view ('frontend.vacanci');
  }
}
