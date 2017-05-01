<?php

include ('../config/connection.php');

session_start();

if($_POST) {

	$q = "SELECT * FROM admin_account WHERE name = '$_POST[name]' AND password = SHA1('$_POST[password]')";
	$r = mysqli_query($dbc, $q);

	if(mysqli_num_rows($r) == 1) {

		$_SESSION['name'] = $_POST['name'];
		header('Location: index.php');

	}

}

 ?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Admin Login</title>
     <link rel="stylesheet" href="config/css/bootstrap.min.css">
     <link rel="stylesheet" href="config/css/style.css">
  </head>
  <body>

    <div class="container">
      <div class="row">

        <br>
        <div class="col-md-4 col-md-offset-4">

          <div class="panel panel-info">

            <div class="panel-heading">
              <strong>Login</strong>
            </div>

            <div class="panel-body">

              <form action="login.php" method="post" role="form">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-default">Login</button>

              </form>

            </div>

          </div>

        </div>
      </div>
    </div>

  <script src="config/js/jquery.min.js"></script>
  <script src="config/js/bootstrap.min.js"></script>
  </body>
</html>
