<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyLeaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'no_of_days'  => 'required',
                'leave_type'       => 'required',
                'leave_reason'     => 'required',
                'start_date'       => 'required|after_or_equal:newdate',
                'end_date'         => 'required|after_or_equal:start_date'

        ];
    }
    public function messages(){
        return[
                'no_of_days.required'  =>'*This field Require',
                'leave_type.required'       =>'*Please Select a Leave Type',
                'leave_reason.required'     =>'*Please Enter your Leave Reason',
                'start_date.required'       =>'*Please select a Start Date',
                'start_date.after_or_equal'         =>'*Enter Date greater than Current Date',
                'end_date.after_or_equal'            =>'*Enter Date greater than Start Date',
                'end_date.required'         =>'*Enter End day of Leave',
                      
        ];
    }
}
