<?php

function page($dbc,$id){
  $q_page = "SELECT header,body FROM pages WHERE id = $id";
  $r_page = mysqli_query($dbc,$q_page);
  while($page = mysqli_fetch_assoc($r_page)){
    echo '<h1>'.$page['header'].'</h1>';
    echo '<p>'.$page['body'].'</p>';
  }
}

 ?>
