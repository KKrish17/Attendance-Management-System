<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessorCreatedRequest;
use App\Http\Requests\ProfessorUpdateRequest;
use Hash;
use Eloquent;
use DataTables;
use App\Models\Professors;
use App\Models\Users;
use Zizaco\Entrust\Entrust;

class ProfessorController extends Controller
{
    public function index(){
    	return view('admin.add_professor');
    }


    public function store(ProfessorCreatedRequest $request){

				$password = $request['teacher_pass'];
				$hashedPassword = Hash::make($password);
				$userid=$request['userid'];
				$value=$request->all();
				//dd($value);

				$obj= new Professors();

				$obj->user_id=$userid;
				$obj->teacher_name=$request['teacher_name'];
				$obj->teacher_add=$request['teacher_address'];
				$obj->teacher_state=$request['teacher_state'];
				$obj->teacher_city=$request['teacher_city'];
				$obj->teacher_pin=$request['teacher_pin'];
				$obj->teacher_gender=$request['teacher_gender'];
				$obj->teacher_dob=$request['teacher_dob'];
				$obj->teacher_dept=$request['teacher_dept'];
				$obj->teacher_pos=$request['teacher_pos'];
				$obj->teacher_email=$request['teacher_email'];
				$obj->teacher_mobile=$request['teacher_mobile'];
				$obj->teacher_status=$request['teacher_status'];

				$sobj=new Users();
				$sobj->user_id=$userid;
				$sobj->password=$hashedPassword;

				$sobj->save();	
				$obj->save();

				return redirect('/admin/show-professors');
	}
	public function edit(Request $request,$id){	

			$userid = Professors::where('user_id', '=', $id)->get();
			return view('admin.update_professor')
				->with('userid',$userid);
	}
	public function update(ProfessorUpdateRequest $request){
				$id=$request['teacher_id'];
				Professors::where('id','=',$id)
				         ->update([
				'teacher_name'=>$request['teacher_name'],
				'teacher_add'=>$request['teacher_add'],
				'teacher_state'=>$request['teacher_state'],
				'teacher_city'=>$request['teacher_city'],
				'teacher_pin'=>$request['teacher_pin'],
				'teacher_gender'=>$request['teacher_gender'],
				'teacher_dob'=>$request['teacher_dob'],
				'teacher_dept'=>$request['teacher_dept'],
				'teacher_pos'=>$request['teacher_pos'],
				'teacher_email'=>$request['teacher_email'],
				'teacher_mobile'=>$request['teacher_mobile'],
				'teacher_status'=>$request['teacher_status']
						]);

				return redirect('/admin/show-professors');
	}
	public function show()
	{
		return view('admin.show_professors');
	}
	public function table()
	{
		$table=Professors::all();
		$datatable=DataTables::of($table)
		->addColumn('action',function($table){
			$btn="<a href='".url('/admin/professors-edit')."/".$table->user_id."'> EDIT </a>"; //&nbsp;&nbsp;";
			// $btn.="<a href='".url('/admin/professors-delete')."/".$table->teacher_id."'> Delete </a>&nbsp;&nbsp;";

			return $btn;
		})

		->rawColumns(['action']);

        return $datatable->make(true);
	}
	public function delete($id){
		Users::where('user_id','=',$id)->delete();
		Professors::where('user_id','=',$id)->delete();
		return redirect('/admin/show-professors');
	}
}
