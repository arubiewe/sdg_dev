<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Goals</title>
  </head>
  <body>
    
    <!-- <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Name:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
</form>
 -->
<div class="container-fluid">
 <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-2">
      <label for="inputState">Due Date:</label>
      <select id="inputState"  class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Core Value:</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>...</option>
      </select>
    </div>
     <div class="form-group col-md-2">
      <label for="inputState">Magnitude</label>
      <select id="inputState" class="form-control">
        <option selected> </option>
        <option>...</option>
      </select>
    </div>
<div class="form-group col-md-2">
      <label for="inputState">Priority</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    </div>
<button type="submit" class="btn btn-primary">Sign in</button>
</form>
    </div>
    




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	
    	 $( ".date" ).datepicker({
container: '.datepicker_wrapper'
  format: "dd-mm-yyyy",
  autoclose: true,
  todayHighlight: true
});



    </script>
  </body>
</html>