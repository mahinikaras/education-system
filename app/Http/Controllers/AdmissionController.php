<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    
    public function std_info(){
        
        return view('register-pages.page-student-info');
        
    }

    public function std_address(){
        
        return view('register-pages.page-student-address');
        
    }

    public function std_education(){

    	return view('register-pages.page-student-education');

    }

    public function std_ethnic_b(){

    	return view('register-pages.page-student-ethnic-background');

    }

    public function std_course(){

    	return view('register-pages.page-student-course');

    }
    
    public function std_course_payment(){


    	return view('register-pages.page-course-payment');

    }
    


}
