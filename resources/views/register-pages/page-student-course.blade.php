@extends('layouts.register.master')


@section('content') 

<h3 class="std-info">Student Course Selection</h3>

<div class="all-forms">
    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{route('Admission.Std-course-payment')}}">

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

                                            <label>Select The Program</label>
                                               <div class="table-responsive">
                                                    <table class="table mb-0">

                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Program</th>
                                                                <th>First Start Date Choice</th>
                                                                <th>Second Start Date Choice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td><p style="margin-bottom: 0;" class="form-control">Jewellery Design</p></td>
                                                                <td>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Jan 13 - April 13</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Jan 13 - April 13</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <th scope="row">2</th>
                                                                <td><p style="margin-bottom: 0;" class="form-control">Jewellery Design</p></td>
                                                                <td>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Jan 13 - April 13</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Jan 13 - April 13</option>
                                                                    </select>
                                                                </td>
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


