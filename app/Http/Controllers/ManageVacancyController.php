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
         $manages = new ManageVacancy;
         $manages->logo = $request->logo;
         $manages->company_title = $request->company_title;
         $manages->job_title = $request->job_title;
         $manages->job_description = $request->job_description;
         $manages->company_overview = $request->company_overview;
         $manages->location = $request->location;
         $manages->company_info = $request->company_info;
         // $manages->status = $request->status;
         $manages->save();

         return redirect('ManageVacancy')->with('message','data berhasil ditambahkan!!');

   }
}
