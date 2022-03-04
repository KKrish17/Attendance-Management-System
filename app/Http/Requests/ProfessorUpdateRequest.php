<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorUpdateRequest extends FormRequest
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

            'teacher_name'      =>'required|regex:/^[a-zA-Z\s]+$/',
            'teacher_status'    => 'required',
            'teacher_add'       => 'required',
            'teacher_state'     => 'required',
            'teacher_city'      => 'required',
            'teacher_pin'       => 'required|digits:6',
            'teacher_dob'       => 'required',
            'teacher_mobile'    => 'required|digits:10',
            'teacher_email'     => 'required|regex:/^.+@.+$/i',
            'teacher_gender'    => 'required',
            'teacher_dept'      => 'required',
            'teacher_pos'       => 'required'
        ];
    }
    public function messages(){
        return[
        
            'teacher_name.required'  =>'*This field is Required',
            'teacher_name.regex'     =>'*Only Characters are Allowed',
            'teacher_status.required'=>'*Please Select your Status',
            'teacher_add.required'   =>'*This field is Required',
            'teacher_city.required'  =>'*This field is Required',
            'teacher_dob.required'   =>'*Please Select your Date of Birth',
            'teacher_state.required' =>'*This field is Required',
            'teacher_mobile.required'=>'*This field is Required',
            'teacher_mobile.digits'  =>'*Enter Correct Mobile Number',
            'teacher_email.required' =>'*This field is Required',
            'teacher_email.regex'    =>'*Enter Correct Email',
            'teacher_pin.required'   =>'*This field is Required',
            'teacher_pin.digits'     =>'*Enter Correct Pin',
            'teacher_gender.required'=>'*Please Select your Gender',
            'teacher_dept.required'  =>'*Please Select your Department',
            'teacher_pos.required'   =>'*Please Select your Designation'
              
        ];
    }
}
