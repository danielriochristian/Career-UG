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
class ManageAdminController extends Controller
{

    public function getRoleAdmin() {
        $rolesyangberhak = DB::table('roles')->where('id','=','2')->get()->first()->namaRule;
        return $rolesyangberhak;
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
    }
    public function index(){
      $manage = Admin::paginate(4);
        return view('partial.manageadmin', compact('manage'));
    }

    public function addPost(Request $request){
    $rules = array(
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
    );
  $validator = Validator::make ( Input::all(), $rules);
  if ($validator->fails())
  return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
  else {
    $manage = new Admin;
    $manage->name = $request->name;
    $manage->email = $request->email;
    $manage->roles_id = 1;
    $manage->password = bcrypt($request['password']);
    $manage->save();
    return response()->json($manage);
  }
}
    public function editPost(request $request){
    $manage = Admin::find ($request->id);
    $manage->name = $request->name;
    $manage->email = $request->email;
    $manage->roles_id = $request->roles_id;
    $manage->password = bcrypt($request['password']);
    $manage->save();
    return response()->json($manage);
    }
    public function deletePost(request $request){
    $manage = Admin::find ($request->id)->delete();
    return response()->json();
    }
}
