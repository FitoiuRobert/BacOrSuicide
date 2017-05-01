<?php

function cat_nav($dbc){
  $q_navigation = "SELECT id,cat_label, title FROM pages ORDER BY title ASC";
  $r_navigation = mysqli_query($dbc,$q_navigation);

  while($nav = mysqli_fetch_assoc($r_navigation)){
    if($nav['cat_label']==$_GET['category']){
  ?>
  <li<?php if($nav['id']==$_GET['page']){echo ' class="active"';}?>>
    <a href="?page=<?php echo $nav['id'].'&'.'category='.$nav['cat_label']; ?>" >
      <?php echo $nav['title']; ?>
    </a>
  </li>
  <?php }}
}

 ?>
