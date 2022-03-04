<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home"></i></a></li>
        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Professors</a></li> -->
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="{{  URL::asset('public/assets/images/profile_av.jpg')}}" alt="User"></a></div>
                            <div class="detail">
                                <h4>Pro. John Doe</h4>
                                <small>Administrator</small>
                            </div>
                        </div>
                    </li>

                    <li class="header">MAIN</li>
                    <li class="active open"><a href="index-2.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                        <ul class="ml-menu">
                            <li><a href="students.html">All Students</a></li>
                            <li><a href="add-students.html">Add Students</a></li>
                            <li><a href="students-profile.html">Students Profile</a></li>
                            <li><a href="students-invoice.html">Students Invoice</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-alt"></i><span>Professors</span> </a>
                        <ul class="ml-menu">
                            <li><a href="professors.html">All Professors</a></li>
                            <li><a href="add-professors.html">Add Professors</a></li>
                            <li><a href="profile.html">Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="parents.html"><i class="zmdi zmdi-account"></i><span>Parents</span> </a></li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-check-circle-u"></i><span>Attendance Management</span> </a>
                        <ul class="ml-menu">
                            <li><a href="student-attendance.html">Student Attendance</a></li>
                            <li><a href="teacher-attendance.html">Teacher Attendance</a></li>
                            <li><a href="employee-attendance.html">Employee Attendance</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-check-circle-u"></i><span>Leave Management</span> </a>
                        <ul class="ml-menu">
                            <li><a href="approve-leave.html">Approve Leave Request</a></li>
                            <li><a href="apply-leave.html">Apply Leave</a></li>
                            <li><a href="create-leave-type.html">Leave Type</a></li>
                        </ul>
                    </li>
                    <li class="header">UNIVERSITY</li>
                    <li><a href="events.html"><i class="zmdi zmdi-calendar-check"></i><span>Events</span> </a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
                        <ul class="ml-menu">
                            <li><a href="departments.html">All Departments</a></li>
                            <li><a href="add-departments.html">Add Departments</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
                        <ul class="ml-menu">
                            <li><a href="courses.html">All Courses</a></li>
                            <li><a href="add-courses.html">Add Courses</a></li>                       
                            <li><a href="courses-info.html">Courses Info</a></li>
                        </ul>
                    </li>
                    <li><a href="library.html"><i class="zmdi zmdi-book"></i><span>Library</span> </a></li>
                    <li><a href="classroom.html"><i class="zmdi zmdi-device-hub"></i><span>Class</span> </a></li>
                    <li><a href="noticeboard.html"><i class="zmdi zmdi-alert-circle"></i><span>Noticeboard</span> </a></li>
                    
                    <li><a href="transport.html"><i class="zmdi zmdi-truck"></i><span>Transport</span></a></li>
                    <li><a href="hostel.html"><i class="zmdi zmdi-hotel"></i><span>Hostel List</span></a></li>       


                    <li class="header">System</li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Traffic this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Server Load</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>

        <!-- <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="http://via.placeholder.com/80x80" alt="User"></a></div>
                            <div class="detail">
                                <h4>Pro. Charlotte</h4>
                                <small>Design Faculty</small>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                                <div class="col-4 p-r-0">
                                    <h5 class="m-b-5">13</h5>
                                    <small>Exp</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">33</h5>
                                    <small>Awards</small>
                                </div>
                                <div class="col-4 p-l-0">
                                    <h5 class="m-b-5">237</h5>
                                    <small>Class</small>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Location: </small>
                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>Charlotte@example.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>                        
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">89% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Illustrator</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Art & Design</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">78% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>CSS</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </li>
                        </ul>                        
                    </li>                    
                </ul>
            </div>
        </div> -->

    </div>    
</aside> <!-- Left sidebar end -->
