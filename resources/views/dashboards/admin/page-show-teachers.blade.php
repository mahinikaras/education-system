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
             
        
                                        
         <h4 class="form-header">List Of Teachers</h4>
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped table-data-show">
                                                    <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th data-priority="1">ID</th>
                                                        <th data-priority="3">Name</th>
                                                        <th data-priority="1">Email</th>
                                                        <th data-priority="3">Phone</th>
                                                        <th data-priority="3">Reset Password</th>
                                                        <th data-priority="6">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <th>1234567</th>
                                                        <td>Mr. Jack</td>
                                                        <td>jack@gmail.com</td>
                                                        <td>12675266523</td>
                                                        <td>
                                                          <a href="" class="btn btn-info"><i class="fa fa-edit"></i> Change</a>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-warning">Approve</a>
                                                             <a href="" class="btn btn-danger">Block</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <th>1234567</th>
                                                        <td>Mr. Jack</td>
                                                        <td>jack@gmail.com</td>
                                                        <td>12675266523</td>
                                                        <td>
                                                          <a href="" class="btn btn-info"><i class="fa fa-edit"></i> Change</a>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-warning">Approve</a>
                                                             <a href="" class="btn btn-danger">Block</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <th>1234567</th>
                                                        <td>Mr. Jack</td>
                                                        <td>jack@gmail.com</td>
                                                        <td>12675266523</td>
                                                        <td>
                                                          <a href="" class="btn btn-info"><i class="fa fa-edit"></i> Change</a>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-warning">Approve</a>
                                                             <a href="" class="btn btn-danger">Block</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th>4</th>
                                                        <th>1234567</th>
                                                        <td>Mr. Jack</td>
                                                        <td>jack@gmail.com</td>
                                                        <td>12675266523</td>
                                                        <td>
                                                          <a href="" class="btn btn-info"><i class="fa fa-edit"></i> Change</a>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-warning">Approve</a>
                                                             <a href="" class="btn btn-danger">Block</a>
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

