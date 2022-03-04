<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyLeaveRequest;
use Hash;
use Eloquent;
use DataTables;
use App\Models\Leave;
use Zizaco\Entrust\Entrust;

class LeaveController extends Controller
{
    public function showleave(){
    	return view('admin.all_leave');
    }
    public function leavetable(){

		$table=Leave::select('*')
			->join('teacher', 'leave_table.user_id', '=', 'teacher.user_id')
			->join('departments','departments.dept_id','=','teacher.teacher_dept')
			->get();

		$datatable=DataTables::of($table)
		->addColumn('action',function($table){
			if($table->leave_status == "Pending"){
				$btn="<a href='".url('/admin/leave-edit')."/".$table->leave_id."'> EDIT </a>";
			}else{
				$btn="--";
			}
			/*if($table->leave_state == "Pending"){
				$btn="<a href='".url('/admin/leave-edit')."/".$table->leave_id."'> EDIT </a>";
			}else{
				$btn="--";
			}*/
			

			return $btn;
		})
	->addColumn('leave_status',function($table){
			if($table->leave_status == "Pending"){
				$bt="<span class='badge badge-warning'>".$table->leave_status."</span>";
			}else if($table->leave_status == "Accepted"){
				$bt="<span class='badge badge-success'>".$table->leave_status."</span>";
			}
			else if($table->leave_status == "Rejected"){
				$bt="<span class='badge badge-danger'>".$table->leave_status."</span>";
			}
			
			/*if($table->leave_state == "Pending"){
				$btn="<a href='".url('/admin/leave-edit')."/".$table->leave_id."'> EDIT </a>";
			}else{
				$btn="--";
			}*/
			

			return $bt;
		})


		->rawColumns(['action','leave_status']);

        return $datatable->make(true);

	}

	public function edit($id){
			$leaveid = Leave::join('teacher', 'leave_table.user_id', '=', 'teacher.user_id')
			->join('departments','departments.dept_id','=','teacher.teacher_dept')
		    ->select('*')
		    ->where('leave_id', '=', $id)
	    	->get();

			return view('admin.edit_leave')
				->with('leaveid',$leaveid);
	}
	public function update(Request $request){
				$id=$request['leave_id'];
				Leave::where('leave_id','=',$id)
				         ->update([
				'leave_remark'=>$request['leave_remark'],
				'leave_status'=>$request['leave_status'],]);

				return redirect('/admin/leaves-list');
	}
	public function apply()
	{
		return view('faculty.apply_leave');
	}
	public function storeLeave(ApplyLeaveRequest $request)
	{
		$k=$request->all();
		//dd($k);
				$obj=new Leave();
				$obj->user_id=$request['userid'];
				$obj->start_date=$request['start_date'];
				$obj->end_date=$request['end_date'];
				$obj->leave_type=$request['leave_type'];
				$obj->leave_reason=$request['leave_reason'];
				$obj->no_of_days=$request['no_of_days'];


				$obj->save();
				return redirect('/admin/show-professors');
	}


}