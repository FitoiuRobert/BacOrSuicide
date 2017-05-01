<?php
include ('config/setup.php');

session_start();
if(!isset($_SESSION['name'])) {
	header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php title(); ?></title>
    <link rel="stylesheet" href="config/css/bootstrap.min.css">
    <link rel="stylesheet" href="config/css/style.css">

  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="?page=categories">Categorii</a></li>
          <li><a href="?page=pages">Pagini</a></li>
        </ul>
        <div class="pull-right">
          <ul class="nav navbar-nav">
            <li class="pull-right"><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
