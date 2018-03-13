<?php
  session_start();
?>

<html>
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Main Menu</title>
    <link rel="stylesheet" type='text/css' href="css/bootstrap.min.css">

  </head>
  <body>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#">Available Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Requested Routes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Routes Offered</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Routes Booked</a>
      </li>
    </ul>


    <div class='container'>
      <form>
        <div class="form-group">
          <label>Pickup Location</label>
          <input type="email" class="form-control" id="location" aria-describedby="emailHelp" placeholder="Enter your pickup location">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Dropoff location</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your dropoff location">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
  </body>
</html>
