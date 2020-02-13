@extends('layouts.admin.master')



@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-8">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
              <h4 class="form-header">Add Teacher</h4>

			<div class="course-form">
				<form class="" action="#" class="outer-repeater">
                     <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                                            <div class="form-group">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" required placeholder="Enter First Name"/>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Last name <span class="required">*</span></label>
                                                <input type="text" class="form-control" required placeholder="Enter Last name"/>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" class="form-control" required placeholder="Enter Last name"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" required placeholder="Enter Last name"/>
                                            </div>

                                            <div class="form-group">
                                                <label>Confirm Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" required placeholder="Enter Last name"/>
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


