
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
                <h2>All Professors
                <small class="text-muted">Lorem ipsum sit amet dollor</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <a href="{{url('/admin/add-professors')}}" class="btn btn-white btn-icon btn-round float-right m-l-10">
                    <i class="zmdi zmdi-plus"></i>
                </a>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active">All Professors</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Professors</strong> List</h2>
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
                            <table class="table table-bordered table-striped table-hover " id="professor_table">
                                <thead>
                                    <tr>             
                                        <th>Edit/Delete</th>                          
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Status</th>
                                        <th>Address</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Pincode</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Date of Birth</th>
                                        
                                        
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
               $('#professor_table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('/admin/table')}}',
               columns: [
                      /*  {
                "className": 'details-control',
                "orderable": false,
                "data": null,
               // "defaultContent": '<a href="{{url('/admin/professors-edit')}}">EDIT</a> | <a href="{{url('/admin/delete-professors')}}">DELETE</a> '
            },*/
                        { data: 'action', name: 'action' },
                        { data: 'teacher_name',name: 'teacher_name' },
                        { data: 'teacher_dept', name: 'teacher_dept' },
                        { data: 'teacher_pos', name: 'teacher_pos' },
                        { data: 'teacher_status', name: 'teacher_status' },
                        { data: 'teacher_add', name: 'teacher_add' },
                        { data: 'teacher_state', name: 'teacher_state' },
                        { data: 'teacher_city', name: 'teacher_city' },
                        { data: 'teacher_pin', name: 'teacher_pin' },
                        { data: 'teacher_gender', name: 'teacher_gender' },
                        { data: 'teacher_email', name: 'teacher_email' },
                        { data: 'teacher_mobile', name: 'teacher_mobile' },
                        { data: 'teacher_dob', name: 'teacher_dob' }
                        
                          
                     ]
            });
         });
</script>

@endsection
