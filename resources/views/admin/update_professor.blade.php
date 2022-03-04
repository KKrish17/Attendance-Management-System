@extends('admin.include.layout')

@section('after_styles')
@endsection

@section('body')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Professors
                <small>Lorem ipsum sit amet dollor</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Add Professor</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                </ul>
                            </li>
                            
                        </ul> 
                    </div>
                    @foreach($userid as $val)
                    <form action="{{url('/admin/professors-update')}}" method="post">
                    
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User ID" name="userid" value="{{$val->user_id}}" readonly>
                                    @if($errors->has('userid')) <span class="error" style="color: red;">{{$errors->first('userid')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="teacher_name" placeholder="Name" value="{{$val->teacher_name}}">
                                    @if($errors->has('teacher_name')) <span class="error" style="color: red;">{{$errors->first('teacher_name')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick" name="teacher_status" >
                                        <option value="">-- Status --</option>
                                        <option value="Running"  @if($val->teacher_status ==='Running') selected @endif>Running</option>
                                        <option value="Retired"  @if($val->teacher_status ==='Retired') selected @endif>Retired</option>
                                    </select>
                                    @if($errors->has('teacher_status')) <span class="error" style="color: red;">{{$errors->first('teacher_status')}}</span> @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-12">    
                                <div class="form-group">
                                    <textarea class="form-control" name="teacher_add" placeholder="Address">{{$val->teacher_add}}</textarea>
                                    @if($errors->has('teacher_add')) <span class="error" style="color: red;">{{$errors->first('teacher_add')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="teacher_state" placeholder="State" value="{{$val->teacher_state}}">
                                    @if($errors->has('teacher_state')) <span class="error" style="color: red;">{{$errors->first('teacher_state')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="teacher_city" placeholder="City" value="{{$val->teacher_city}}">
                                    @if($errors->has('teacher_city')) <span class="error" style="color: red;">{{$errors->first('teacher_city')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="PinCode" name="teacher_pin" value="{{$val->teacher_pin}}">
                                    @if($errors->has('teacher_pin')) <span class="error" style="color: red;">{{$errors->first('teacher_pin')}}</span> @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="datetimepicker form-control" placeholder="Date of Birth" onfocus="this.select(); this.setAttribute('type','date');" name="teacher_dob" value="{{$val->teacher_dob}}">
                                    @if($errors->has('teacher_dob')) <span class="error" style="color: red;">{{$errors->first('teacher_dob')}}</span> @endif
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Mobile Number" name="teacher_mobile" value="{{$val->teacher_mobile}}">
                                    @if($errors->has('teacher_mobile')) <span class="error" style="color: red;">{{$errors->first('teacher_mobile')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="{{$val->teacher_email}}" placeholder="Enter Your Email" name="teacher_email">
                                    @if($errors->has('teacher_email')) <span class="error" style="color: red;">{{$errors->first('teacher_email')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">                                
                                <div class="form-group"><select class="form-control show-tick" value="{{$val->teacher_gender}}" name="teacher_gender">
                                    <option value="" @if($val->teacher_gender ==='') selected @endif>-- Gender --</option>
                                    <option value="M" @if($val->teacher_gender ==='M') selected @endif>Male</option>
                                    <option value="F"  @if($val->teacher_gender ==='F') selected @endif>Female</option>
                                </select>
                                @if($errors->has('teacher_gender')) <span class="error" style="color: red;">{{$errors->first('teacher_gender')}}</span> @endif
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick" name="teacher_dept">
                                        <option value=""  @if($val->teacher_dept ==='') selected @endif>-- Department --</option>
                                        <option value="1" @if($val->teacher_dept ===1) selected @endif>Computer Science</option>
                                        <option value="2" @if($val->teacher_dept ===2) selected @endif>Electronics</option>
                                        <option value="3" @if($val->teacher_dept ===3) selected @endif>Mechanical</option>
                                        <option value="4" @if($val->teacher_dept ===4) selected @endif>Electrical</option>
                                        <option value="5" @if($val->teacher_dept ===5) selected @endif>Civil</option>
                                    </select>
                                    @if($errors->has('teacher_dept')) <span class="error" style="color: red;">{{$errors->first('teacher_dept')}}</span> @endif
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick" name="teacher_pos" value="{{$val->teacher_pos}}">
                                        <option value=""  @if($val->teacher_pos ==='') selected @endif>-- Designation --</option>
                                        <option value="HOD"  @if($val->teacher_pos ==='HOD') selected @endif>HOD</option>
                                        <option value="TEACHER"  @if($val->teacher_pos ==='TEACHER') selected @endif>Teacher</option>
                                    </select>
                                    @if($errors->has('teacher_pos')) <span class="error" style="color: red;">{{$errors->first('teacher_pos')}}</span> @endif
                                </div>
                            </div>
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                             <input type="hidden" name="teacher_id" value={{$val->id}}>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary" name="submit">Update</button>
                                <button type="submit" class="btn btn-raised btn-round" name="cancel">Cancel</button>
                            </div>

                        </div>
                    </div>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('after_scripts')

@endsection