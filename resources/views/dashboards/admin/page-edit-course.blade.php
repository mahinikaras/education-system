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
              <h4 class="form-header">Edit Course</h4>

			<div class="course-form">
				<form class="" action="#" class="outer-repeater">
                     <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                                            <div class="form-group">
                                                <label>Course Title <span class="required">*</span></label>
                                                <input type="text" class="form-control" required placeholder="Enter Course Title"/>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Course Code <span class="required">*</span></label>
                                                <input type="text" class="form-control" required placeholder="Enter Course Code"/>
                                            </div>
                                            

                                            
                                             <div class="inner-repeater mb-4">
                                                        <div data-repeater-list="inner-group" class="inner form-group">
                                                            <label>Course Duration <span>*</span></label>
                                                            <div data-repeater-item class="inner mb-3 row">
                                                                <div class="col-md-10 col-8">
                                                                    <input type="text"name="dates" class="inner form-control"/>
                                                                </div>
                                                                <div class="col-md-2 col-4">
                                                                    <input data-repeater-delete type="button" class="btn btn-danger btn-block inner" value="Delete"/>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <input data-repeater-create type="button" class="btn btn-success inner" value="Add More"/>
                                                    </div>


                                            <div class="form-group">
                                                <label>Fees <span class="required">*</span></label>
                                                <input type="text" class="form-control" required placeholder="Enter Fees"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Assigned Teacher</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5" placeholder="Enter Description"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Update
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
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
@endsection


@section('script')
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