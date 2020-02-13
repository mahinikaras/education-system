@extends('layouts.admin.master')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
             
        
                                        
         <h4 class="form-header">List Of Students</h4>
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="{{route('Admin.Student-info')}}" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>123456</td>
                                                <td>Jackob Dan</td>
                                                <td>jackubdan@gmail.com</td>
                                                <td>12675266523</td>
                                                <td><a href="" class="btn btn-sm btn-success">Details</a></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                                                    <a href="" class="btn btn-danger btn-sm">Block</a>
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
<!-- Required datatable js -->
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>   

@endsection