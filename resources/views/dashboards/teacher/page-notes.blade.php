@extends('layouts.teacher.master')




@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-8">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
              <h4 class="form-header">Course List</h4>

			<div class="course-form">
				<form class="" action="#" class="outer-repeater">
                     <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                                            <div class="form-group">
                                                <label>Select Course <span class="required">*</span></label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">CSCXXXX</option>
                                                </select>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Select Teacher <span class="required">*</span></label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Mr. Jone</option>
                                                </select>
                                            </div>
                                            

                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Submit
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


