<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDasboardController extends Controller
{
    //


	public function course_list(){

		return view('dashboards.student.page-course-list');
	}

	public function course_notice(){

		return view('dashboards.student.page-course-notice');
	}

	public function course_exams(){

		return view('dashboards.student.page-course-exams');
	}

	public function course_details(){

		return view('dashboards.student.page-course-details');
	}

	public function profile(){

		return view('dashboards.student.page-student-information');
	}

	public function grade_report(){

		return view('dashboards.student.page-grade-report');
	}



}
