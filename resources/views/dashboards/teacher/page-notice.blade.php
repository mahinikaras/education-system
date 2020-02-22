 @extends('layouts.teacher.master')




@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
              <h4 class="form-header">Course Notices</h4>

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
                            <label> Students : &nbsp; </label><label class="label label-success">38</label>&nbsp;
                        </div>
                        
                    </div>
                    <div class="panel-footer text-center">
                       <a href="{{route('Teacher.Course-details')}}" style="display: block;"> <i class="fa fa-bullhorn"></i> Notices</a>
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
                            <label> Students : &nbsp; </label><label class="label label-success">38</label>&nbsp;
                        </div>
                        
                    </div>
                    <div class="panel-footer text-center">
                       <a href="" style="display: block;"><i class="fa fa-bullhorn"></i> Notices</a>
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
                            <label> Students : &nbsp; </label><label class="label label-success">38</label>&nbsp;
                        </div>
                        
                    </div>
                    <div class="panel-footer text-center">
                       <a href="" style="display: block;"> <i class="fa fa-bullhorn"></i> Notices</a>
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


