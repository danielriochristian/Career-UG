<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class graduateController extends Controller
{
  public function index(){
    return view ('frontend.graduate');
}
}
