
@extends('admin.include.layout')

@section('after_styles')

<!-- JQuery DataTable Css -->
<link href="{{URL::asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<!-- Custom Css -->      
@endsection

@section('body')

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Leave Appplication
                <small class="text-muted">Lorem ipsum sit amet dollor</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <a href="" class="btn btn-white btn-icon btn-round float-right m-l-10">
                    <i class="zmdi zmdi-plus"></i>
                </a>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active">All Leave Application</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Leave Application</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">2017 Year</a></li>
                                    <li><a href="javascript:void(0);">2016 Year</a></li>
                                    <li><a href="javascript:void(0);">2015 Year</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover " id="leave_table">
                                <thead>
                                    <tr>             
                                        <th>Action</th>                     
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>No. of Days</th>
                                        <th>Leave State</th>
                                        <th>Leave Type</th>
                                        <th>Leave Reason</th>
                                        <th>Leave Remark</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection


@section('after_scripts')
<!-- Jquery DataTable Plugin Js --> 
<script src="{{URL::asset('public/assets/bundles/datatablescripts.bundle.js')}}"></script>

<script src="{{URL::asset('public/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{URL::asset('public/assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script>
        $(document).ready(function(){
               $('#leave_table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('/admin/leaveTable')}}',
               columns: [
                        {data: 'action',name:'action'},
                        {data: 'teacher_name',name:'teacher_name'},
                        {data: 'dept_name',name:'dept_name'},
                        { data: 'start_date', name: 'start_date' },
                        { data: 'end_date', name: 'end_date' },
                        { data: 'no_of_days', name: 'no_of_days' },
                        { data: 'leave_status', name: 'leave_status' },
                        { data: 'leave_type', name: 'leave_type' },
                        { data: 'leave_reason', name: 'leave_reason' },
                        { data: 'leave_remark', name: 'leave_remark' }
                     ]
            });
         });
</script>

@endsection
