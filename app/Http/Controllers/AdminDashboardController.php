<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //


	public function add_course(){

		return view('dashboards.admin.page-add-course');

	}


	public function course_list(){


		return view('dashboards.admin.page-show-course');

	}


	public function edit_course($id){


		return view('dashboards.admin.page-edit-course');


	}

	public function assign_course(){


		return view('dashboards.admin.page-assign-course');

	}

	public function add_teacher(){

		return view('dashboards.admin.page-add-teacher');

	}


	public function teacher_list(){

		return view('dashboards.admin.page-show-teachers');

	}

	public function student_list(){


		return view('dashboards.admin.page-show-students');


	}

	public function student_info(){


		return view('dashboards.admin.page-student-information');

	}


}
