<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/student-information', 'AdmissionController@std_info')->name('Admission.Std-info');
Route::get('/student-address', 'AdmissionController@std_address')->name('Admission.Std-address');
Route::get('/student-education', 'AdmissionController@std_education')->name('Admission.Std-education');
Route::get('/student-ethnic-background', 'AdmissionController@std_ethnic_b')->name('Admission.Std-etnic-b');
Route::get('/student-course', 'AdmissionController@std_course')->name('Admission.Std-course');
Route::get('/student-course-payment', 'AdmissionController@std_course_payment')->name('Admission.Std-course-payment');


//admin routes - route COURSE
Route::get('/dashboard/admin/add-course','AdminDashboardController@add_course')->name('Admin.Add-course');
Route::get('/dashboard/admin/course-list','AdminDashboardController@course_list')->name('Admin.Course-list');
Route::get('/dashboard/admin/edit-course/{id}','AdminDashboardController@edit_course')->name('Admin.Edit-course');
Route::get('/dashboard/admin/assign-course','AdminDashboardController@assign_course')->name('Admin.Assign-course');
//admin routes - route TEACHER
Route::get('/dashboard/admin/add-teacher','AdminDashboardController@add_teacher')->name('Admin.Add-teacher');
Route::get('/dashboard/admin/teacher-list','AdminDashboardController@teacher_list')->name('Admin.Teacher-list');
//admin routes - route STUDENT
Route::get('/dashboard/admin/student-list','AdminDashboardController@student_list')->name('Admin.Student-list');
Route::get('/dashboard/admin/student-information','AdminDashboardController@student_info')->name('Admin.Student-info');
//admin routes - route STUDENT
Route::get('/dashboard/admin/payment-info','AdminDashboardController@payment_info')->name('Admin.Payment-info');


/////////////////##########################--TEACHER ROUTES---###############################/////////////////////////


Route::get('/dashboard/teacher/course-list','TeacherDashboardController@course_list')->name('Teacher.Show-courses');
Route::get('/dashboard/teacher/course-details','TeacherDashboardController@course_details')->name('Teacher.Course-details');
Route::get('/dashboard/teacher/submit-marks','TeacherDashboardController@submit_marks')->name('Teacher.Submit-marks');
Route::get('/dashboard/teacher/student-details','TeacherDashboardController@std_info')->name('Teacher.Std-info');
Route::get('/dashboard/teacher/notice','TeacherDashboardController@notice_info')->name('Teacher.Notice-info');
Route::get('/dashboard/teacher/exams','TeacherDashboardController@exam_info')->name('Teacher.Exam-info');



/////////////////##########################--STUDENT ROUTES---###############################/////////////////////////

Route::get('/dashboard/student/course-list','StudentDasboardController@course_list')->name('Student.Course-list');
Route::get('/dashboard/student/notice','StudentDasboardController@course_notice')->name('Student.Course-notice');
Route::get('/dashboard/student/exams','StudentDasboardController@course_exams')->name('Student.Course-exams');
Route::get('/dashboard/student/course-details','StudentDasboardController@course_details')->name('Student.Course-details');
Route::get('/dashboard/student/profile','StudentDasboardController@profile')->name('Student.Profile');
Route::get('/dashboard/student/grade-report','StudentDasboardController@grade_report')->name('Student.Grade-report');










Route::get('{any}', 'VeltrixController@index');


