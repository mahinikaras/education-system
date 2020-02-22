@extends('layouts.admin.master')


@section('css')

<link rel="stylesheet" href="{{asset('plugins/date-range/daterangepicker.css')}}">

@endsection

@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-8">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
              <h4 class="form-header">Add Course</h4>

                <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="outer-repeater" action="{{route('Admin.Store-course')}}" method="post">

                                             @csrf   

                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item class="outer">
                                                    <div class="form-group">
                                                        <label for="formname">Course Title <span class="required">*</span></label>
                                                        <input type="text" class="form-control" id="formname" name="title" required="required">
                                                    </div>
        
                                                    <div class="form-group">
                                                        <label for="formemail">Course Code <span class="required">*</span></label>
                                                        <input type="text" class="form-control" id="formemail" name="code" required="required">
                                                    </div>
        
                                                    <div class="inner-repeater mb-4">
                                                        <div data-repeater-list="inner-group" class="inner form-group">
                                                            <label>Course Duration <span class="required">*</span></label>
                                                            <div data-repeater-item class="inner mb-3 row">
                                                                <div class="col-md-10 col-8">
                                                                    <input type="text" class="inner form-control date_range" name="duration[]" required="required">

                                                                </div>
                                                                <div class="col-md-2 col-4">
                                                                    <input data-repeater-delete type="button" class="btn btn-danger btn-block inner" value="Delete"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <input data-repeater-create type="button" class="btn btn-success inner addbtn" value="Add More"/>
                                                    </div>
        
                                                     <div class="form-group">
                                                        <label for="formemail">Fees <span class="required">*</span></label>
                                                        <input type="text" class="form-control" id="formemail" name="fees" required="required" />
                                                    </div>
        
        
                                                    <div class="form-group">
                                                        <label for="formmessage">Description :</label>
                                                        <textarea id="formmessage" class="form-control" rows="3" name="description"></textarea>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                            <button type="button" onclick="invokeDaterangepicker()" class="btn btn-secondary waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

           </div>
       </div>
   </div>
</div>
@endsection


@section('script')
    <script src="{{asset('plugins/moment/moment.js')}}"></script>
    <script src="{{asset('plugins/date-range/daterangepicker.min.js')}}"></script>
   <!-- form repeater js -->
<script src="{{ URL::asset('plugins/jquery-repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-repeater.int.js') }}"></script>
@endsection

@section('script-bottom')

<script>
    $('.date_range').daterangepicker();


$(document).on("click", ".addbtn", function(){


    $('.date_range').daterangepicker();


});

  
</script>

@endsection