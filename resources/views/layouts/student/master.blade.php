<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Student - Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="" name="author" />
        @include('layouts.admin.head')
    </head>
<body>
    <div id="wrapper">
         @include('layouts.student.header')
         @include('layouts.student.sidebar')
         <div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   @yield('content')
                </div> 
            </div> 
        </div> 
        @include('layouts.student.footer')  
        @include('layouts.student.footer-script')  
    </div> 
    </body>
</html>