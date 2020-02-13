@extends('layouts.register.master')


@section('content') 

<h3 class="std-info">Pay Now</h3>

<div class="all-forms">
    <div class="row">
        <div class="col-md-12">
            <form class="" action="#">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8">
                        <p>Please select your intended program of study, As well as your
                            First and second start date options based on the options below.
                            Based on your program selection you will then receive information 
                            regarding  total charges in the next section . Total charges include
                            tution, books and materials, and applicable sales tax.

                    <br>
                    <br>
                    </p>
                        </div>
                    </div>

                                            <h4>Details</h4>
                                               <div class="table-responsive">
                                                    <table class="table mb-0">

                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Course Code</th>
                                                                <th>Name</th>
                                                                <th>Course Fee</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"><p style="margin-bottom: 0" class="form-control">CSCXXX</p></th>
                                                                <td><p style="margin-bottom: 0;" class="form-control">Jewellery Design</p></td>
                                                                <td><p style="margin-bottom: 0" class="form-control">$100</p></td>
                                                                
                                                            </tr>
                                                             <tr>
                                                                <th scope="row"><p style="margin-bottom: 0" class="form-control">CSCXXX</p></th>
                                                                <td><p style="margin-bottom: 0;" class="form-control">Jewellery Design</p></td>
                                                                <td><p style="margin-bottom: 0" class="form-control">$100</p></td>
                                                                
                                                            </tr>
                                                             <tr>
                                                                <th scope="row"></th>
                                                                <td><p style="margin-bottom: 0;" class="form-control"><strong>Total</strong></p></td>
                                                                <td><p style="margin-bottom: 0" class="form-control"><strong>$200</strong></p></td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
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


