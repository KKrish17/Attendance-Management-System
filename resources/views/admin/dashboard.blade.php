@extends('admin.include.layout')

@section('after_styles')
@endsection

@section('body')
   <!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Dashboard
                <small>Welcome to Edu-in-a-Box</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-account-o"></i> </div>
                                <div class="content">
                                    <div class="text">Student</div>
                                    <h5 class="number count-to" data-from="0" data-to="2049" data-speed="2500" data-fresh-interval="700">2049</h5>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-account-circle"></i> </div>
                                <div class="content">
                                    <div class="text">Teacher</div>
                                    <h5 class="number count-to" data-from="0" data-to="39" data-speed="4000" data-fresh-interval="700">39</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-label"></i> </div>
                                <div class="content">
                                    <div class="text">Attendance</div>
                                    <h5 class="number count-to" data-from="0" data-to="798" data-speed="3000" data-fresh-interval="700">798</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-graduation-cap"></i> </div>
                                <div class="content">
                                    <div class="text">Courses</div>
                                    <h5 class="number count-to" data-from="0" data-to="43" data-speed="2500" data-fresh-interval="700">43</h5>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-balance-wallet"></i> </div>
                                <div class="content">
                                    <div class="text">Expense</div>
                                    <h5 class="m-b-0">₹<span class="number count-to" data-from="0" data-to="2154" data-speed="2500" data-fresh-interval="700">2154</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-balance"></i> </div>
                                <div class="content">
                                    <div class="text">Income</div>
                                    <h5 class="m-b-0">₹<span class="number count-to" data-from="0" data-to="5478" data-speed="2500" data-fresh-interval="700">5478</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>University</strong> Survey <small>Description text here...</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>                    
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#chart-view">Chart View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#table-view">Table View</a></li>
                        </ul>
                            
                        <!-- Tab panes -->
                        <div class="tab-content m-t-10">
                            <div class="tab-pane active" id="chart-view">
                                <div id="m_bar_chart" class="graph"></div>
                                <div class="xl-slategray">
                                    <div class="body">
                                        <div class="row text-center">
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">₹106</h4>
                                                <p class="text-muted margin-0"> Today's</p>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">₹907</h4>
                                                <p class="text-muted margin-0">This Week's</p>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">₹4210</h4>
                                                <p class="text-muted margin-0">This Month's</p>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">₹7,000</h4>
                                                <p class="text-muted margin-0">This Year's</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="tab-pane" id="table-view">
                                <div class="table-responsive">
                                    <table class="table m-b-0 table-hover">
                                        <thead>
                                            <tr>                                                
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Earning</th>
                                                <th>Reviews</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                                <td>₹2,325</td>
                                                <td>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                                <td>₹3,325</td>
                                                <td>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                                <td>₹5,021</td>
                                                <td>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td>508 Virginia Street Chicago, IL 60653</td>
                                                <td>₹1,325</td>
                                                <td>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                                <td>₹2,325</td>
                                                <td>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td>508 Virginia Street Chicago, IL 60653</td>
                                                <td>₹2,325</td>
                                                <td>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>New</strong> Admission List <small>Description text here...</small></h2>
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
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>27</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>23</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td>James</td>
                                        <td>23</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td>charlie</td>
                                        <td>21</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>                   
                                        <td><span class="badge badge-success">BBA</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Our</strong> Location <small>Contrary to popular belief, Lorem Ipsum is not simply random text</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div id="world-map-markers" style="height:280px;"></div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="body">
                                    <ul class="row location_list list-unstyled">
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-turquoise">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                                <span>America</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-khaki">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="24" data-speed="2500" data-fresh-interval="700">24</h4>
                                                <span>Australia</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-parpl">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="15" data-speed="2500" data-fresh-interval="700">15</h4>
                                                <span>Canada</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-salmon">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="33" data-speed="2500" data-fresh-interval="700">33</h4>
                                                <span>India</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-blue">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="8" data-speed="2500" data-fresh-interval="700">8</h4>
                                                <span>UK</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-slategray">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="5" data-speed="2500" data-fresh-interval="700">5</h4>
                                                <span>Other</span>
                                            </div>
                                        </li>                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card tasks_report">
                    <div class="header">
                        <h2><strong>Total</strong> Revenue</h2>                        
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
                    <div class="body text-center">
                        <h4 class="margin-0">₹ <span class="number count-to" data-from="0" data-to="8923" data-speed="2500" data-fresh-interval="700">8923</span></h4>
                        <h6 class="m-b-20">Total Income</h6>
                        <input type="text" class="knob dial1" value="66" data-width="100" data-height="100" data-thickness="0.3" data-fgColor="#4caf50" readonly>
                        <h6 class="m-t-20">Satisfaction Rate</h6>
                        <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="32px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#212121">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="body">
                        <div class="sparkline m-b-10" data-type="bar" data-width="97%" data-height="38px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="#cccccc">2,8,5,3,1,7,9,5,6,4,2,3,1,2,8,5,3,1,7,9,5,6,4,2,3,1</div>
                        <h6 class="text-center m-b-25 col-white">New Students in USA</h6>
                        <div id="usa_map" style="height: 200px"></div>
                        <div class="table-responsive m-t-20">
                            <table class="table table-striped m-b-0">
                                <thead>
                                    <tr>
                                        <th>City</th>                                        
                                        <th>New Student</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>New York</td>
                                        <td>215<i class="zmdi zmdi-trending-up m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Los Angeles</td>
                                        <td>189<i class="zmdi zmdi-trending-up m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Chicago</td>
                                        <td>408<i class="zmdi zmdi-trending-down m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Houston</td>
                                        <td>78<i class="zmdi zmdi-trending-down m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Phoenix</td>
                                        <td>148<i class="zmdi zmdi-trending-up m-l-10"></i></td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body text-center">
                        <input type="text" class="knob" value="65" data-width="100" data-height="100" data-thickness="0.25" data-fgColor="#cb8fe7" readonly>
                        <p class="text-muted m-b-0">READ-ONLY</p>
                    </div>
                </div>                
                <div class="card">
                    <div class="header">
                        <h2><strong>Pro.</strong> Timeline</h2>
                        <ul class="header-dropdown">                            
                            
                        </ul>
                    </div>
                    <div class="body">
                        <div class="new_timeline">
                            <div class="header">
                                <div class="color-overlay">
                                    <div class="day-number">8</div>
                                    <div class="date-right">
                                    <div class="day-name">Monday</div>
                                    <div class="month">February 2018</div>
                                    </div>
                                </div>                                
                            </div>
                            <ul>
                                <li>
                                    <div class="bullet pink"></div>
                                    <div class="time">11am</div>
                                    <div class="desc">
                                        <h3>Attendance</h3>
                                        <h4>Computer Class</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet green"></div>
                                    <div class="time">12pm</div>
                                    <div class="desc">
                                        <h3>Design Team</h3>
                                        <h4>Hangouts</h4>
                                        <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                            <li><img src="{{  URL::asset('public/assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
                                            <li><img src="{{  URL::asset('public/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                            <li><img src="{{  URL::asset('public/assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                            <li><img src="{{  URL::asset('public/assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet orange"></div>
                                    <div class="time">1:30pm</div>
                                    <div class="desc">
                                        <h3>Lunch Break</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet green"></div>
                                    <div class="time">2pm</div>
                                    <div class="desc">
                                        <h3>Finish</h3>
                                        <h4>Go to Home</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>

@endsection


@section('after_scripts')

@endsection