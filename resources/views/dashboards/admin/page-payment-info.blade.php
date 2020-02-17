@extends('layouts.admin.master')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('plugins/date-range/daterangepicker.css')}}">
@endsection

@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
             
        
                                        
         <h4 class="form-header">Payment Lists</h4>


            <div class="payment-search">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="dates" class="form-control" placeholder="Date">
                        </div>
                    </div>
                      <div class="col-md-3">
                          <button class="btn btn-primary">Serach</button>
                      </div>
                </div>
            </div>

                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Payment ID</th>
                                                <th>Amount</th>
                                                <th>Details</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td>20/02/2020</td>
                                                <td>16767548</td>
                                                <td>$3000</td>
                                                <td><a href="{{route('Admin.Student-info')}}" class="btn btn-sm btn-success">Details</a></td>
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

<script src="{{asset('plugins/moment/moment.js')}}"></script>
<script src="{{asset('plugins/date-range/daterangepicker.min.js')}}"></script>
<script src="{{asset('plugins/jquery-repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('assets/pages/form-repeater.int.js')}}"></script> 

@endsection

@section('script-bottom')

<script>
    $('input[name="dates"]').daterangepicker();
</script>

@endsection