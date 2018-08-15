<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvnameController extends Controller
{
  public function index(){
    return view ('frontend.cv_name');
}
}
