@extends('layouts.admin.master')

@section('css')
<!-- Table css -->
<link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection


@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
             
        
                                        
         <h4 class="form-header">List Of Courses</h4>
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped table-data-show">
                                                    <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th data-priority="1">Course Code</th>
                                                        <th data-priority="3">Course Name</th>
                                                        <th data-priority="1">Fees</th>
                                                        <th data-priority="3">Duration</th>
                                                        <th data-priority="3">Assigned Teacher</th>
                                                        <th data-priority="6">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>CSCXXX</td>
                                                        <td>Jewellery Design</td>
                                                        <td>$100</td>
                                                        <td>JAN 13 - JUN 13</td>
                                                        <td>Mr. Jones</td>
                                                        <td>
                                                            <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-info"><i class="fa fa-edit"></i> EDIT</a>
                                                             <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>CSCXXX</td>
                                                        <td>Jewellery Design</td>
                                                        <td>$100</td>
                                                        <td>JAN 13 - JUN 13</td>
                                                        <td>Not Assigned</td>
                                                        <td>
                                                            <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-info"><i class="fa fa-edit"></i> EDIT</a>
                                                             <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>CSCXXX</td>
                                                        <td>Jewellery Design</td>
                                                        <td>$100</td>
                                                        <td>JAN 13 - JUN 13</td>
                                                        <td>Mr. Jones</td>
                                                        <td>
                                                             <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-info"><i class="fa fa-edit"></i> EDIT</a>
                                                             <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <td>CSCXXX</td>
                                                        <td>Jewellery Design</td>
                                                        <td>$100</td>
                                                        <td>JAN 13 - JUN 13</td>
                                                        <td>Not Assigned</td>
                                                        <td>
                                                             <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-info"><i class="fa fa-edit"></i> EDIT</a>
                                                             <a href="{{route('Admin.Edit-course',['id'=>1])}}" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</a>
                                                             
                                                        </td>
                                                    </tr>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    
			
           </div>
       </div>
   </div>
</div>
@endsection

@section('script')
<!-- Responsive-table-->
<script src="{{ URL::asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}"></script>
@endsection

@section('script')
<script>
$(function() {
      $('.table-responsive').responsiveTable({
          addDisplayAllBtn: 'btn btn-secondary'
       });
});
</script>
@endsection

