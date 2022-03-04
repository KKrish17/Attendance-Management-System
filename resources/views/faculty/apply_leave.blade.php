@extends('admin.include.layout')

@section('after_styles')
@endsection

@section('body')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Apply Leave
                <small>Lorem Ipsum sit amet dollor is simply dummy text</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                    <li class="breadcrumb-item active">Apply Leave</li>
                </ul>
            </div>
        </div>
    </div>
	
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">

                
                <div class="card">
                    <div class="header">
                        <h2><strong>Apply</strong> Leave Request</h2>
                    </div>
                     <form action="{{url('/store-leave-request')}}" method="post">
                    <div class="body">

                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-12">   
                                <label for="">No. of Leave Remain</label>                             
                                <div class="form-group">
                                    <input type="text" class="datetimepicker form-control" placeholder="Leave Remain" name="leave_remain" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">   
                                <label for="">No. of Days Requested</label>                             
                                <div class="form-group">
                                    <input type="text" class="datetimepicker form-control" placeholder="No of Leave" id="numdays" value="{{old('no_of_days')}}" name="no_of_days" readonly>
                                    @if($errors->has('no_of_days')) <span class="error" style="color: red;">{{$errors->first('no_of_days')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="">Leave Type</label>
                                    <select class="form-control show-tick" value="{{old('leave_type')}}" name="leave_type">
                                        <option value="" selected hidden>-- Leave Type --</option>
                                        <option value="SL">Sick Leave</option>
                                        <option value="CL">Casual Leave</option>
                                    </select>
                                    @if($errors->has('leave_type')) <span class="error" style="color: red;">{{$errors->first('leave_type')}}</span> @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Starting Leave Date</label>
                                    <input type="date" class="datetimepicker form-control" placeholder="Starting Leave Date" id="start_date" value="{{old('start_date')}}" onchange="cal()" name="start_date" value="">
                                    @if($errors->has('start_date')) <span class="error" style="color: red;">{{$errors->first('start_date')}}</span> @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ending Leave Date</label>
                                     <input type="date" class="datetimepicker form-control" placeholder="Ending Leave Date" id="end_date" value="{{old('end_date')}}" onchange="cal()" name="end_date" value="">
                                     @if($errors->has('end_date')) <span class="error" style="color: red;">{{$errors->first('end_date')}}</span> @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Reason</label>
                                    <textarea placeholder="Reason"  name="leave_reason" id="" value="{{old('leave_reason')}}" rows="4" class="form-control"></textarea>
                                </div>
                                @if($errors->has('leave_reason')) <span class="error" style="color: red;">{{$errors->first('leave_reason')}}</span> @endif
                            </div>
                        </div>
                        <input type="hidden" name="userid" value="11">
                        <input type="hidden" name="newdate" value="" id="newdate">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="row" align="center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                                <button type="reset" class="btn btn-raised btn-round">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                
                <div class="card">
                    <div class="header">
                        <h2><strong>My</strong> Leave Request</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 text-center">
                                <thead>
                                    <tr>
                                        <th>Staff</th>
                                        <th>Leave Type</th>
                                        <th>Leave Date</th>
                                        <th>Days</th>
                                        <th>Apply Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>RaKesh Mandal</td>
                                        <td>Medical Leave</td>
                                        <td>06.23.2019 - 07.23.2019</td>
                                        <td>31</td>
                                        <td>06.23.2019</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>RaKesh Mandal</td>
                                        <td>Medical Leave</td>
                                        <td>06.23.2019 - 07.23.2019</td>
                                        <td>31</td>
                                        <td>06.23.2019</td>
                                        <td><span class="badge badge-success">Approve</span></td>
                                    </tr>
                                    <tr>
                                        <td>RaKesh Mandal</td>
                                        <td>Medical Leave</td>
                                        <td>06.23.2019 - 07.23.2019</td>
                                        <td>31</td>
                                        <td>06.23.2019</td>
                                        <td><span class="badge badge-danger">Disapprove</span></td>
                                    </tr>
                                    <tr>
                                        <td>RaKesh Mandal</td>
                                        <td>Medical Leave</td>
                                        <td>06.23.2019 - 07.23.2019</td>
                                        <td>31</td>
                                        <td>06.23.2019</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>

                                </tbody>
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

<script type="text/javascript">

$(document).ready(function(){
  var d = new Date();      
        
   function twoDigitDate(d){
      return ((d.getDate()).toString().length == 1) ? "0"+(d.getDate()).toString() : (d.getDate()).toString();
    };
        
    function twoDigitMonth(d){
        return ((d.getMonth()+1).toString().length == 1) ? "0"+(d.getMonth()+1).toString() : (d.getMonth()+1).toString();
    };    
      
    var today_ISO_date = twoDigitDate(d)+"-"+twoDigitMonth(d)+"-"+d.getFullYear(); // in yyyy-mm-dd format
        
    document.getElementById('newdate').setAttribute("value", today_ISO_date);
       
     var dd_mm_yyyy;
     $("#newdate").change( function(){
        changedDate = $(this).val(); //in yyyy-mm-dd format obtained from datepicker
        var date = new Date(changedDate);
        dd_mm_yyyy = twoDigitDate(date)+"-"+twoDigitMonth(date)+"-"+date.getFullYear();
        });
        
    });


        function GetDays(){
            var date=new Date();
                var enddate = new Date(document.getElementById("end_date").value);

                var startdate = new Date(document.getElementById("start_date").value);
                //return parseInt((enddate - startdate) / (24 * 3600 * 1000)+1);
            var aDay = 24 * 60 * 60 * 1000,
  daysDiff = parseInt((enddate.getTime()-startdate.getTime())/aDay,10)+1;

  if (daysDiff>0) {  
    for (var i = startdate.getTime(), lst = enddate.getTime(); i <= lst; i += aDay) {
      var d = new Date(i);
      if (d.getDay() == 6 || d.getDay() == 0 // weekend
      || gon.holiday.indexOf(formatDate(d)) != -1) {
          daysDiff--;
      }
    }
  }
  else if(daysDiff<=0){
    return "Enter Correct End Date";
  }
  return daysDiff;
        }

        function cal(){
        if(document.getElementById("end_date")){
            document.getElementById("numdays").value=GetDays();
        }  
    }







    var gon = {};
gon["holiday"] = "2019-08-06,2019-08-08,2016-08-31,2016-08-07,2015-08-13,2016-08-29,2016-01-07,2015-09-08".split(",");

// 2 helper functions - moment.js is 35K minified so overkill in my opinion
function pad(num) { return ("0" + num).slice(-2); }
function formatDate(date) { var d = new Date(date), dArr = [d.getFullYear(), pad(d.getMonth() + 1), pad(d.getDate())];return dArr.join('-');}


    </script>

@endsection
