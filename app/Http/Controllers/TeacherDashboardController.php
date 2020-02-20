<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    //


	public function course_list(){


		return view('dashboards.teacher.page-course-list');

	}

	public function course_details(){


		return view('dashboards.teacher.page-course-details');

	}

	public function submit_marks(){


		return view('dashboards.teacher.page-submit-marks');

	}


}
