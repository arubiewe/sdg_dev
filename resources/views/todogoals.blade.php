<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Goals</title>
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
                  <a class="nav-link" href="" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                     +Create goals 
                     <span class="sr-only">
                        <!-- (current) -->
                     </span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Edit Core values</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Others Link
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#"></a>
                     <a class="dropdown-item" href="#"></a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#"></a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
         </div>
      </nav>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="container-fluid">
                  <form>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="name">Name:</label>
                           <input type="text" class="form-control" id="name" name="title" placeholder="Name">
                        </div>
                        <div class="form-group col-md-3">
                           <label for="date">Due Date:</label>
                           <input type="date" class="form-control" id="duedate" name="duedate" placeholder="Due date">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-4">
                           <label for="corevalues">Core Value:</label>
                           <select id="corevalues" name="corevalues" class="form-control">
                              <option selected></option>
                              <option></option>
                              <option>Health</option>
                              <option>Family</option>
                              <option>Career</option>
                              <option>Education</option>
                              <option>Lifestyle</option>
                              <option>Spirituality</option>
                              <option>Properties</option>
                           </select>
                        </div>
                        <div class="form-group col-md-2">
                           <label for="magnitude">Magnitude</label>
                           <select id="magnitude" name="magnitude" class="form-control">
                              <option selected> </option>
                              <option>Easy</option>
                              <option>Doable</option>
                              <option>Challenging</option>
                              <option>Daunting</option>
                              <option>Adacious</option>
                           </select>
                        </div>
                        <div class="form-group col-md-2">
                           <label for="priority">Priority</label>
                           <select id="priority" name="priority" class="form-control">
                              <option selected> </option>
                              <option>Low</option>
                              <option>Medium</option>
                              <option>High</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-8">
                           <label for="reason">What do you want too achieve in this goal:</label>
                           <textarea class="form-control" id="reason" name="reason" placeholder="What do you want to achieve"></textarea>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Save</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>