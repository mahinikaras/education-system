<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    
    public function std_info(){
        
        return view('register-pages.page-student-info');
        
    }
    
}
