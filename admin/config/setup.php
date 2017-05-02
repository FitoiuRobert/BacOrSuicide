<?php
#Show Errors:
error_reporting(0);

#Database connection:
include ('../config/connection.php');

#Page setup:
if(!isset($_GET['page'])){
    $page = 'pages';
} else{
  $page = $_GET['page'];
}

#Functions:
include ('functions/title.php');


?>
