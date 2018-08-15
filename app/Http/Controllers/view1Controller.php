<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view1Controller extends Controller
{
  public function index(){
    return view ('frontend.view1');
  }
}
