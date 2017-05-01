<?php
#Show Errors:
error_reporting(0);

#Database connection:
include ('config/connection.php');

#Page setup:
if(isset($_GET['page'])){
    $c_page = 'page';
} else {
    $c_page = 'home';
}

#Functions:
include ('functions/title.php');
include ('functions/main_nav.php');
include ('functions/cat_nav.php');
include ('functions/page.php');
include ('functions/home.php');

?>
