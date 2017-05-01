<?php

function title(){
  $web_title = 'WAD';
  if(isset($_GET['page'])){
    echo $_GET['page'].' | '.$web_title;
  } else{
    echo 'pages | '.$web_title;
  }

}

 ?>
