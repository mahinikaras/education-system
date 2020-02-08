@extends('layouts.register.master')


@section('content')

<h3 class="std-info">Student Information</h3>

<div class="all-forms">
                                        <form class="" action="#">
                                            <div class="form-group">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" required />
                                            </div>
        
                                            <div class="form-group">
                                                <label>Last Name <span class="required">*</span></label>
                                                <div>
                                                    <input type="text" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control" placeholder="Optional" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Birth <span class="required">*</span></label>
                                                <div>
                                                    <input type="date" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>U.S Social Security Number</label>
                                                <div>
                                                    <input data-parsley-type="number" type="text"
                                                            class="form-control" placeholder="Optional" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender <span class="required">*</span></label>
                                                <div>
                                                    <input type="text" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Student Number</label>
                                                <div>
                                                    <input type="text" class="form-control" required placeholder="optional" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <div>
                                                    <input type="Email" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Country Code</label>
                                                <div>
                                                    <input type="text" class="form-control" required placeholder="Optional" />
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label>Mobile <span class="required">*</span></label>
                                                <div>
                                                    <input type="text" class="form-control" required />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light btn-right">
                                                        Save & Next
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
</div>


@endsection


