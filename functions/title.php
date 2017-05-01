<?php

function title($dbc,$id){
  $web_title = 'WAD';

  if(isset($_GET['page'])){
    $q_p_title = "SELECT title FROM pages WHERE id = $id";
    $r_title = mysqli_query($dbc,$q_p_title);
    $title = mysqli_fetch_array($r_title);
    echo $title[0].' | '.$web_title;
  } else {
    echo 'Home | '.$web_title;
  }

}

 ?>
