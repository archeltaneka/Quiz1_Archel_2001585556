<html>
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body style='background-color:grey'>

    <div class='container'>
      <div class='container-fluid'>
        <div class='jumbotron'>
          <h1 class="display-3">Welcome!</h1>
          <p class="lead">Choose one from the list of user below to continue.</p>
          <hr class="my-4">
          <p class='lead'>
            <?php
              $servername = 'localhost';
              $username = 'root';
              $password = '';
              $dbname = 'webappdevquiz';

              $conn = new mysqli($servername, $username, $password, $dbname);
              if($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
              }

              $sql = 'select user_name from users';
              $result = $conn->query($sql);
              echo '<select name="user">';
              while($row = $result->fetch_assoc()) {
                echo '<option>'.$row["user_name"].'</option>';
              }
              echo '</select>';
              $conn->close();
            ?>
          </p>
          <p class='lead'>
             <a class="btn btn-success btn-med" href="menu.php" role="button">Login</a>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
