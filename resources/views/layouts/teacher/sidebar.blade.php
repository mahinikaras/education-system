      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="index" class="waves-effect">
                                    <i class="ti-home"></i><span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Courses <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{route('Admin.Add-course')}}">Add Course</a></li>
                                    <li><a href="{{route('Admin.Course-list')}}">Show Course</a></li>
                                    <li><a href="{{route('Admin.Assign-course')}}">Assign Course</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Teachers  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{route('Admin.Add-teacher')}}">Add Teacher</a></li>
                                    <li><a href="{{route('Admin.Teacher-list')}}">Show Teachers</a></li>
                                </ul>
                            </li>
                           <li>
                                <a href="{{route('Admin.Student-list')}}" class="waves-effect">
                                    <i class="ti-home"></i> <span> Students </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Admin.Payment-info')}}" class="waves-effect">
                                    <i class="ti-home"></i> <span> Payments </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Admin.Student-list')}}" class="waves-effect">
                                    <i class="ti-home"></i> <span> Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Admin.Student-list')}}" class="waves-effect">
                                    <i class="ti-home"></i> <span> Logout </span>
                                </a>
                            </li>




                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
