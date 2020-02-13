@extends('layouts.register.master')


@section('content')

<h3 class="std-info">Student Education</h3>

<div class="all-forms">
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('Admission.Std-etnic-b')}}">

                <div class="form-group">
                                                <label>High School/High School Equivalency graduation date<span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
        
                                            <div class="form-group">
                                                <label>Highest Level of Education Completed <span class="required">*</span></label>
                                                <div>
                                                    <select name="" id="" class="form-control">
                                                        <option disabled="disabled" selected="selected">Select</option>
                                                        <option value="High School">High School</option>
                                                        <option value="GED">GED</option>
                                                        <option value="College/University">College/University</option>
                                                        <option value="Career/Trade School">Career/Trade School</option>
                                                        <option value="AA">AA</option>
                                                        <option value="BA">BA</option>
                                                        <option value="BS">BS</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MS">MS</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div>
                                                    <button type="button" class="btn btn-secondary waves-effect">Previous</button>
                                                    <button type="submit" class="btn btn-info waves-effect waves-light btn-right">
                                                        Save & Next
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
        </div>
    </div>                                
</div>


@endsection


