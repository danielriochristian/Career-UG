<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Auth;
use DB;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Role;

class ManageVacancyController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
    }
  public function index()
    {
      $manages = Vacancy::all();
        return view('partial.managevacancy', compact('manages'));
    }
  public function create()
    {
        return view('partial.addvacancy');
    }

    public function store(Request $request)
    {
         $manages = new Vacancy;
         $manages->logo = $request->logo;
         $manages->nama = $request->nama;
         $manages->desk = $request->desk;
         $manages->info= $request->info;
         $manages->persyaratan = $request->persyaratan;
         $manages->alamat = $request->alamat;
         $manages->kategori = $request->kategori;
         $manages->prov = $request->prov;
         // $manages->status = $request->status;
         $manages->save();

         return redirect('vacancy')->with('message','data berhasil ditambahkan!!');

   }

   public function edit($id)
   {
       $manages = Vacancy::find($id);
       if(!$manages){
           abort(503);
       }
       return view('partial.editvacancy')->with('manages',$manages);
   }

       public function update(Request $request, $id)
      {

        $manages = new Vacancy;
        $manages->logo = $request->logo;
        $manages->nama = $request->nama;
        $manages->info= $request->info;
        $manages->desk = $request->desk;
        $manages->persyaratan = $request->persyaratan;
        $manages->alamat = $request->alamat;
        $manages->kategori = $request->kategori;
        $manages->prov = $request->prov;
        // $manages->status = $request->status;
        $manages->save();

          return redirect('vacancy')->with('message','data berhasil ditambahkan!!');
      }
}
