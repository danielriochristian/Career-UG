<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvmajorController extends Controller
{
  public function index(){
    return view ('frontend.cv_major');
}
}
