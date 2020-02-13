@extends('layouts.register.master')


@section('content')

<h3 class="std-info">Student Address</h3>

<div class="all-forms">
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('Admission.Std-education')}}">

                <p class="label-header">Permanent Home Address</p>

                                            <div class="form-group">
                                                <label>Street Number, Street Name, Apt # or P.O. Box <span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                                <input type="text" class="form-control" />
                                            </div>
        
                                            <div class="form-group">
                                                <label>City <span class="required">*</span></label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Postral Code <span class="required">*</span></label>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>County <span class="required">*</span></label>
                                                <div>
                                                    <input type="date" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>State</label>
                                                <div>
                                                    <select name="" id="" class="form-control"></select>
                                                </div>
                                            </div>
                <p class="label-header">Mailing Address(If Different Than Others)</p>
 <div class="form-group">
                                                <label>Street Number, Street Name, Apt # or P.O. Box </label>
                                                <input type="text" class="form-control" />
                                                <input type="text" class="form-control" />
                                            </div>
        
                                            <div class="form-group">
                                                <label>City </label>
                                                <div>
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Postral Code </label>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <div>
                                                    <input type="date" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>State</label>
                                                <div>
                                                    <select name="" id="" class="form-control"></select>
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


