<?php

function main_nav($dbc){
  $q_category = "SELECT * FROM cat_menu ORDER BY position ASC";
  $r_category = mysqli_query($dbc,$q_category);

  while($cat = mysqli_fetch_assoc($r_category)){
    ?>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <?php echo $cat['title'].' '; ?>
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <?php

        $q_navigation = "SELECT id,cat_label, title FROM pages ORDER BY title ASC";
        $r_navigation = mysqli_query($dbc,$q_navigation);

        while($nav = mysqli_fetch_assoc($r_navigation)){
          if($nav['cat_label']==$cat['label']){
        ?>
        <li>
          <a href="?page=<?php echo $nav['id'].'&'.'category='.$nav['cat_label'];?>">
            <?php echo $nav['title']; ?>
          </a>
        </li>
        <?php }} ?>
      </ul>
    </li>
  <?php }
}

 ?>
