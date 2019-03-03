<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <style type="text/css">
        /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
   padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
   padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
   font-size:25px;
   -webkit-transition: .5s all ease;
   -moz-transition: .5s all ease;
   transition: .5s all ease;
}
#footer ul.social li:hover a i {
   font-size:30px;
   margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
   color:#ffffff;
}
#footer ul.social li a:hover{
   color:#eeeeee;
}
#footer ul.quick-links li{
   padding: 3px 0;
   -webkit-transition: .5s all ease;
   -moz-transition: .5s all ease;
   transition: .5s all ease;
}
#footer ul.quick-links li:hover{
   padding: 3px 0;
   margin-left:5px;
   font-weight:700;
}
#footer ul.quick-links li a i{
   margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
   #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

    </style>

      <title>@yield('title')</title>
   </head>
   <body>


      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="{{ url('/') }}">SDGGoals</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  {{-- <a class="nav-link" href="" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                     +Create goals 
                     <span class="sr-only">
                        <!-- (current) -->
                     </span>
                  </a> --}}
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#my_todos">My Goals</a>
               </li>
               <li class="nav-item dropdown">
                  <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Others Link
                  </a> -->
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#"></a>
                     <a class="dropdown-item" href="#"></a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#"></a>
                  </div>
               </li>
               <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
               </li> -->
            </ul>

           

           <!--  <form class="form-inline my-2 my-lg-0">
               <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
              
            </form>
            <form class="form-inline my-2 my-lg-0">
               <a href="{{ route('login') }}" class="btn btn-outline-success my-2 my-sm-0"> Login</a>&nbsp;
              
              <a href="{{ route('register') }}" class="btn btn-outline-success my-2 my-sm-0"> Register</a>&nbsp;


              <form class="form-inline my-2 my-lg-0">
                <label for="" style="color:red;"> </label> <br>
               <a href="{{ route('logout') }}" class="btn btn-outline-danger my-2 my-sm-0"> Logout</a>

              
              <!-- <form class="form-inline my-2 my-lg-0">
                <label for="" style="color:red;"> </label> <br>
               <a href="logout" class="btn btn-danger my-2 my-sm-0 " > Logout</a> -->

               <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
         </div>
      </nav>

      @yield('content')

         


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>