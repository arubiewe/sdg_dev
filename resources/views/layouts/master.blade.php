<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>@yield('title')</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#">SDGGoals</a>
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
            <form class="form-inline my-2 my-lg-0">
                <label for="" style="color:red;">{{auth()->user()->email}} </label> <br>
               <a href="logout" class="btn btn-outline-success my-2 my-sm-0"> Logout</a>

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
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>