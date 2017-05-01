<?php include ('config/setup.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php title($dbc,$_GET['page']); ?></title>
    <link rel="stylesheet" href="config/css/bootstrap.min.css">
    <link rel="stylesheet" href="config/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="?">Home</a></li>
          <?php main_nav($dbc); ?>
        </ul>
      </div>
    </nav>
