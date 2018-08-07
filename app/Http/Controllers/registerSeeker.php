<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerSeeker extends Controller
{
    public function index(){
      return view ('frontend.seeker');
    }
}
