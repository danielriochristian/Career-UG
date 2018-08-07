<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerEmployer extends Controller
{
  public function index(){
    return view ('frontend.employer');
}
}
