<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use Auth;
use DB;

class ManageRolesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      // $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
  }
    public function index(){
      $manage = Role::paginate(4);
      return view('partial.roles', compact('manage'));
    }

    public function editPost(request $request){
    $manage = Role::find ($request->id);
    $manage->namaRule = $request->namaRule;
    $manage->save();
    return response()->json($manage);
    }
}
