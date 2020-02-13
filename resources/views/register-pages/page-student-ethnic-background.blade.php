@extends('layouts.register.master')


@section('content')

<h3 class="std-info">Student Ethnic Background</h3>

<div class="all-forms">
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('Admission.Std-course')}}">

                <div class="form-group">
                    <p>(Participation is optional. U.S  citizens only) <br> <br>
                    To comply  with state and federal education laws, XXX asks that you
                     complete the following survey regarding your ethnic background.
                    Your response is confidential and no individuals will will be identified 
                    In statistical reports based on the result of this survey . It is not used
                    In the admission process and will have no bearing on your admission
                    status.
                    <br>
                    <br>
                    </p>
                                            <label>Are you Hispanic or Latino</label>
                                                <select name="" id="" class="form-control">
                                                    <option disabled="disabled" selected="selected">Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
        
                                            <div class="form-group">
                                                <label>Select one or more of the following issues</label>
                                                <div>
                                                    <select name="" id="" class="form-control">
                                                        <option disabled="disabled" selected="selected">Select</option>
                                                        <option value="AMERICAN INDIAN OR ALASKA NATIVE">AMERICAN INDIAN OR ALASKA NATIVE</option>
                                                        <option value="BALCK OR AFRICAN AMERICAN">BALCK OR AFRICAN AMERICAN</option>
                                                        <option value="WHITE">WHITE</option>
                                                        <option value="NATIVE HAWAIIAN OR OTHER PACIFIC ISLANDER">NATIVE HAWAIIAN OR OTHER PACIFIC ISLANDER</option>
                                                        <option value="ASIAN">ASIAN</option>
                                                        
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


