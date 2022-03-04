@extends('admin.include.layout')

@section('after_styles')
@endsection

@section('body')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Leave Application
                <small>Lorem ipsum sit amet dollor</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Leave Application</li>
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
                    @foreach($leaveid as $val)
                    <form action="{{url('/admin/leave-update/')}}" method="post">
                    
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                   Name: <input type="text" class="form-control" name="leave_days_no" placeholder="Leave Days No" value="{{$val->teacher_name}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                   Department: <input type="text" class="form-control" name="leave_days_no" placeholder="Leave Days No" value="{{$val->dept_name}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                   Leave Reason: <textarea class="form-control" name="leave_reason" placeholder="Leave Reason" readonly>{{$val->leave_reason}}</textarea>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                   No. Of Days: <input type="text" class="form-control" name="leave_days_no" placeholder="Leave Days No" value="{{$val->no_of_days}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                   Leave Type: <input type="text" class="form-control" name="leave_type" placeholder="Leave Type" value="{{$val->leave_type}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    Start Date: <input type="date" class="datetimepicker form-control" placeholder="Leave Start Date" onfocus="this.select(); this.setAttribute('type','date');" name="leave_start" value="{{$val->start_date}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    End Date: <input type="date" class="datetimepicker form-control" placeholder="Leave End Date" onfocus="this.select(); this.setAttribute('type','date');" name="leave_end" value="{{$val->end_date}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                   Leave Remark: <textarea class="form-control" name="leave_remark" placeholder="Leave Remark">{{$val->leave_remark}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    Leave Status: <select class="form-control show-tick" name="leave_status">
                                        <option value="Pending" @if($val->leave_status ==='Pending') selected @elseif($val->leave_status ==='Accepted') hidden @elseif($val->leave_status ==='Rejected') hidden @endif>Pending</option>
                                        <option value="Accepted"  @if($val->leave_status ==='Accepted') selected @elseif($val->leave_status ==='Rejected') hidden @endif>Accepted</option>
                                        <option value="Rejected"  @if($val->leave_status ==='Rejected') selected @elseif($val->leave_status ==='Accepted') hidden @endif>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            

                        

                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <input type="hidden" name="leave_id" value="{{$val->leave_id}}">
                            
                            <div class="col-sm-12" align="center">
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