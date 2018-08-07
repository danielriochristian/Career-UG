<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Http\Requests;

class RegisterController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('guest');
  // }
  public function getRegis()
    {
      $manages = Admin::all();
        return view('Register', ['manages' => $manages]);
    }
    public function postRegis(Request $request)
    {
      //this one will be useless once an account has been created...
        $manages = new Admin();
          $manages->name = $request->name;
          $manages->email =  $request->email;
          $manages->password = bcrypt($request['password']);
          $manages->roles_id = 1;
          $manages->save();
          return redirect('admin')->with('message','data berhasil ditambahkan!!');
      }
    }
