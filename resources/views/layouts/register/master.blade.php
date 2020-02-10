<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Student Register</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layouts.head')
    </head>
<body>
    <div id="wrapper">
         
           <div class="admission-header">
              <h2 class="text-center">Stone Rose Designs</h2>
              <p class="text-center">Online Admission Application</p>  
           </div>
           
                <div class="container">
                  
                   <div class="row">
                       <div class="col-md-4">
                            @include('layouts.register.sidebar')
                       </div>
                       <div class="col-md-8">
                           @yield('content')
                       </div>
                   </div>
                </div> 
           
       
        @include('layouts.footer-script')  

    </div> 
     <div class="admission-footer">
       @include('layouts.footer')
     </div>
    </body>
</html>