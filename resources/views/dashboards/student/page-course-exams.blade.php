 @extends('layouts.student.master')




@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
              <h4 class="form-header">Course Exams</h4>

			<div class="course-form">
				 <div class="row">

              <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-body course-list-panel">
                       <div>
                            <label>Course Name : </label>
                            <label class="label label-info"> Jewellery Design </label>
                        </div>
                        <div>
                            <label>Course Code : </label>
                            <label class="label label-info"> CSCX </label>
                        </div>
                        <div>
                            <label> Result : &nbsp; </label><label class="label label-success">-</label>&nbsp;
                        </div>
                        <div>
                            <label> Status : &nbsp; </label><label class="label label-success">Vaild</label>&nbsp;
                        </div>
                        
                    </div>
                    <div class="panel-footer text-center">
                       <a href="{{route('Student.Course-details')}}" style="display: block;"> <i class="far fa-gem"></i> Exams</a>
                    </div>
                </div>
              </div>  
              <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-body course-list-panel">
                       <div>
                            <label>Course Name : </label>
                            <label class="label label-info"> Jewellery Design </label>
                        </div>
                        <div>
                            <label>Course Code : </label>
                            <label class="label label-info"> CSCX </label>
                        </div>
                        <div>
                            <label> Result : &nbsp; </label><label class="label label-success">-</label>&nbsp;
                        </div>
                        <div>
                            <label> Status : &nbsp; </label><label class="label label-success">Vaild</label>&nbsp;
                        </div>
                        
                    </div>
                    <div class="panel-footer text-center">
                       <a href="{{route('Student.Course-details')}}" style="display: block;"> <i class="far fa-gem"></i> Exams</a>
                    </div>
                </div>
              </div>  
              <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-body course-list-panel">
                       <div>
                            <label>Course Name : </label>
                            <label class="label label-info"> Jewellery Design </label>
                        </div>
                        <div>
                            <label>Course Code : </label>
                            <label class="label label-info"> CSCX </label>
                        </div>
                        <div>
                            <label> Result : &nbsp; </label><label class="label label-success">-</label>&nbsp;
                        </div>
                        <div>
                            <label> Status : &nbsp; </label><label class="label label-success">Vaild</label>&nbsp;
                        </div>
                        
                    </div>
                    <div class="panel-footer text-center">
                       <a href="{{route('Student.Course-details')}}" style="display: block;"> <i class="far fa-gem"></i> Exams</a>
                    </div>
                </div>
              </div>   
             


         </div>
			</div>

           </div>
       </div>
   </div>
</div>
@endsection


