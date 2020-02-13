@extends('layouts.admin.master')


@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
        <div class="card-header content-header student-details"><h4 class="content-header-txt">Student Details</h4></div>
           <div class="card-body pdl-40 pdr-40 student-info">                              
         
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                     <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-user" aria-hidden="true"></i> Basic  Information</div>
                      <div class="card-body">
                          <ul class="information-list">
                            <li><span>First Name :</span> Jack </li>
                            <li><span>Last Name :</span> Dan</li>
                            <li><span>Middle Name :</span> Jahan</li>
                          </ul>
                      </div>
                     </div>
                </div>
                <div class="col-md-5">
                       <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-user-plus" aria-hidden="true"></i> Additional Information</div>
                      <div class="card-body">
                          <ul class="information-list">
                            <li><span>Date of Birth :</span> Jack </li>
                            <li><span>U.S Social Security Number :</span> Dan</li>
                            <li><span>Gender  :</span> Jahan</li>
                          </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
              </div>


             <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-address-card" aria-hidden="true"></i> Permanent Home Address</div>
                      <div class="card-body">
                          <ul class="information-list">
                            <li><span>Street Number, Street Name, Apt # or P.O. Box :</span> Jack </li>
                            <li><span>City :</span> Dan</li>
                            <li><span>Postal Code  :</span> Jahan</li>
                            <li><span>Country :</span></li>
                            <li><span>State :</span></li>
                          </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-envelope" aria-hidden="true"></i> Mailing Address(If Different Than Others)</div>
                      <div class="card-body">
                          <ul class="information-list">
                            <li><span>Business Name(if applicable) :</span></li>
                            <li><span>Street Number, Street Name, Apt # or P.O. Box :</span> Jack </li>
                            <li><span>City :</span> Dan</li>
                            <li><span>Postal Code  :</span> Jahan</li>
                            <li><span>Country :</span></li>

                          </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
              </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Information</div>
                      <div class="card-body">
                          <ul class="information-list">
                            <li><span>Email :</span></li>
                            <li><span>Mobile Phone :</span> Jack </li>
                          </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education Level</div>
                      <div class="card-body">
                          <ul class="information-list">
                            <li><span>High School/High School Equivalency graduation date :</span> Jack</li>
                            <li><span>Highest Level of Education Completed :</span> Dan</li>
                           
                          </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
              </div>

              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card text-white bg-primary mb-3">
                      <div class="card-header"><i class="fa fa-book" aria-hidden="true"></i> Courses</div>
                      <div class="card-body">
                           <div class="table-responsive">
                                            <table class="table mb-0 course-table-admin">

                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Course Name</th>
                                                        <th>Course Code</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Jeweller Design</td>
                                                        <td>CSCXXX</td>
                                                        <td>Valid</td>
                                                    </tr>
                                                   <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jeweller Design</td>
                                                        <td>CSCXXX</td>
                                                        <td>Valid</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Jeweller Design</td>
                                                        <td>CSCXXX</td>
                                                        <td>Valid</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
              </div>


             
                                        
            </div>
           </div>
       </div>
   </div>
</div>
@endsection


