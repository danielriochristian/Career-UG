<?php

namespace App\Http\Controllers;
use App\Admin;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Role;

class ManagerController extends Controller
{

  public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','1')->get()->first()->namaRule;
      return $rolesyangberhak;
  }
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
  }
  public function index(){
    $manage = Admin::paginate(4);
      return view('partial.manageradmin', compact('manage'));
  }
  public function editprofile(){
    $manage = Admin::paginate(4);
      return view('partial.editprofile', compact('manage'));
  }
  public function updateprofile(Request $request){
    $manage= Auth::user();
    $manage->name = $request->get('name');
    $manage->email = $request->get('email');
    $manage->save();
    return redirect('/editprofile')->with('status', 'Profil Berhasil Di Update!');
  }
}
