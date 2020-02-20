@extends('layouts.teacher.master')




@section('content')
<div class="pd-40"></div>
<div class="row">
  <div class="col-md-12">
      <div class="card">
           <div class="card-body pdl-40 pdr-40">
            
            <div class="course-form">
               <div class="row">

                   <div class="col-md-12">
                      <div class="course_all">
                          <h4 class="course_name">jewellery Design (CSCXXXX)</h4>
                          <div class="teacher_info">
                              <img src="{{asset('assets/images/profile-picture/profile.jpg')}}" class="img_teacher" alt="">
                          </div>
                          <div class="basic">
                            <p class="name">Mr. Jone</p>
                            <p class="email">jackxyz123n@gmail.com</p>
                          </div>

                          <div class="clearfix"></div>


                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs course_tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Notes</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Notice</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Exams</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home" role="tabpanel">
                                                <div class="notes-list">

                                                    <form action="">
                                                      <div class="row">
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Notes Name">
                                                            </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <input type="file" class="form-control" placeholder="Select File">
                                                            </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <button class="btn btn-primary" type="submit"><i class="fa fa-upload"></i>  UPLOAD</button>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </form>

                                                    <div class="table-rep-plugin course_notes">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th data-priority="1">Title</th>
                                                                    <th data-priority="2">Upload Date</th>
                                                                    <th data-priority="3">Size</th>
                                                                    <th data-priority="4">Download</th>
                                                                    <th data-priority="4">Delete</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th><i class="fa fa-file"></i> Lecture 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td>0.898 Mb</td>
                                                                    <td><a href="" class="notes-download btn btn-sm"><i class="fa fa-download"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-file"></i> Lecture 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td>0.898 Mb</td>
                                                                    <td><a href="" class="notes-download btn btn-sm"><i class="fa fa-download"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-file"></i> Lecture 2</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td>0.898 Mb</td>
                                                                    <td><a href="" class="notes-download btn btn-sm"><i class="fa fa-download"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-file"></i> Lecture 3</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td>0.898 Mb</td>
                                                                    <td><a href="" class="notes-download btn btn-sm"><i class="fa fa-download"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-file"></i> Lecture 4</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td>0.898 Mb</td>
                                                                    <td><a href="" class="notes-download btn btn-sm"><i class="fa fa-download"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile" role="tabpanel">
                                                

                                                <div class="notes-list">

                                                    <form action="">
                                                      <div class="row">
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Subject">
                                                            </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                             <div class="form-group">
                                                                <textarea id="message" class="form-control"></textarea>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <button class="btn btn-primary" type="submit"><i class="fa fa-upload"></i>  SUBMIT</button>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </form>

                                                    <div class="table-rep-plugin course_notes">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th data-priority="1">Title</th>
                                                                    <th data-priority="2">Post Date</th>
                                                                    <th data-priority="4">View</th>
                                                                    <th data-priority="4">Delete</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th><i class="fa fa-bullhorn"></i> Notice 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td><a href="" class="notes-download btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-eye"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="fa fa-bullhorn"></i> Notice 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td><a href="" class="notes-download btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-eye"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="fa fa-bullhorn"></i> Notice 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td><a href="" class="notes-download btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-eye"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="fa fa-bullhorn"></i> Notice 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td><a href="" class="notes-download btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-eye"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="fa fa-bullhorn"></i> Notice 1</th>
                                                                    <td>09-Feb-20 18:27:40</td>
                                                                    <td><a href="" class="notes-download btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-eye"></i></a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>

                                                                
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                            </div>
                                          </div>
                                            <div class="tab-pane p-3" id="messages" role="tabpanel">
                                                <div class="notes-list">

                                                    <form action="">
                                                      <div class="row">
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Exam Name">
                                                            </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                                <input type="date" class="form-control" placeholder="Date">
                                                            </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Points">
                                                            </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                              <button class="btn btn-primary" type="submit"><i class="fa fa-upload"></i>  Create</button>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </form>

                                                    <div class="table-rep-plugin course_notes">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th data-priority="1">Title</th>
                                                                    <th data-priority="2">Date</th>
                                                                    <th data-priority="3">Points</th>
                                                                    <th data-priority="3">Submit Points</th>
                                                                    <th data-priority="5">Delete</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th><i class="far fa-gem"></i> Quiz 1</th>
                                                                    <td>09-Feb-20</td>
                                                                    <th>50</th>
                                                                    <td><a href="{{route('Teacher.Submit-marks')}}" class="btn btn-info btn-sm">Submit</a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="far fa-gem"></i> Quiz 2</th>
                                                                    <td>09-Feb-20</td>
                                                                    <th>50</th>
                                                                    <td><a href="" class="btn btn-info btn-sm">Submit</a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="far fa-gem"></i> Project 1</th>
                                                                    <td>09-Feb-20</td>
                                                                    <th>150</th>
                                                                    <td><a href="" class="btn btn-info btn-sm">Submit</a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <th><i class="far fa-gem"></i> Project 2</th>
                                                                    <td>09-Feb-20</td>
                                                                    <th>150</th>
                                                                    <td><a href="" class="btn btn-info btn-sm">Submit</a></td>
                                                                    <td><a href="" class="notes-delete btn btn-sm"><i class="fa fa-trash"></i></a></td>
                                                                </tr>
                                                                

                                                                
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>

                      </div>
                   </div>


               </div>
            </div>

           </div>
       </div>
   </div>
</div>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0">Notice 1</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->                                              


@endsection


