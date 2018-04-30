
    <div class="container-fluid">
      <div class="row">
        <h2 class="text-center">Administrare Pagini</h2>
        <div class="col-md-3">
          <?php #print_r($_POST); ?>
          <?php

            if (isset($_POST['submitted'])) {

              $title =  mysqli_real_escape_string($dbc,$_POST['title']);
              $header =  mysqli_real_escape_string($dbc,$_POST['header']);
              $body =  mysqli_real_escape_string($dbc,$_POST['body']);
              $cat_label = mysqli_real_escape_string($dbc,$_POST['cat_label']);

              if($_POST['submitted'] == 1){

                if($_POST['id'] != ''){
                  $q = "UPDATE pages SET cat_label='$cat_label', title='$title', header='$header',  body='$body' WHERE id=$_POST[id]";
                  $status = 'modificata';
                }else {
                  $q = "INSERT INTO pages (cat_label, title, header,body) VALUES ('$cat_label', '$title', '$header', '$body')";
                  $status = 'adaugata';
                }

              } elseif ($_POST['submitted'] == 0) {
                if($_POST['id'] != ''){
                  $q = "DELETE FROM pages WHERE id=$_POST[id]";
                  $status = 'stearsa';
                }
              }

              $r = mysqli_query($dbc,$q);
              if($r){
                $message = '<p>Pagina a fost '.$status.'!</p>';
              } else{
                $message = '<p>Pagina nu a fost '.$status.': '.mysqli_error($dbc).'</p>';
                $message .= '<p>'.$q.'</p>';
              }

            }

          ?>

            <div class="list-group">
              <a href="?page=pages" class="list-group-item"><h3 class="list-group-item-heading">Adauga o pagina</h3></a>
              <?php
                $q = "SELECT * FROM pages ORDER BY cat_label,id ASC";
                $r = mysqli_query($dbc,$q);

                while($page_list = mysqli_fetch_assoc($r)){
                  $blurb = substr(strip_tags($page_list['body']),0,150);
                ?>
                <a href="?page=pages&id=<?php echo $page_list['id']; ?>" class="list-group-item">
                  <h4 class="list-group-item-heading"><?php echo $page_list['title']; ?></h4>
                  <p class="list-group-item-text"><?php echo $blurb.'...'; ?></h4></p>
                </a>
              <?php  } ?>

            </div>
        </div>

        <div class="col-md-9">
          <?php

          if(isset($_GET['id'])){
            $q = "SELECT * FROM pages WHERE id=$_GET[id]";
            $r = mysqli_query($dbc,$q);

            $opened = mysqli_fetch_assoc($r);
          }

           ?>
          <?php if(isset($message)){ echo $message; } ?>

          <form action="?page=pages&id=" method="post">

            <div class="form-group">
              <label for="cat_label">Categorie:</label>
              <select name="cat_label" class="form-control" id="cat_label">
                <?php

                $q = "SELECT label,title FROM cat_menu ORDER BY position ASC";
                $r = mysqli_query($dbc,$q);

                while($cat = mysqli_fetch_assoc($r)){
                ?>
                  <option value="<?php echo $cat['label'];?>"
                    <?php
                      $q_p = "SELECT cat_label FROM pages WHERE id=$_GET[id]";
                      $r_p = mysqli_query($dbc,$q_p);
                      $p_l = mysqli_fetch_assoc($r_p);
                      if($p_l['cat_label'] == $cat['label']){ echo ' selected';}
                    ?>><?php echo $cat['title']; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label for="title">Titlu:</label>
              <input type="text" class="form-control" id="title" name="title" value="<?php echo $opened['title']; ?>" placeholder="Titlul Paginii">
            </div>

            <div class="form-group">
              <label for="header">Descriere(Header):</label>
              <input type="text" class="form-control" id="header" name="header" value="<?php echo $opened['header']; ?>" placeholder="Descrierea Paginii">
            </div>

            <div class="form-group">
              <label for="body">Continut:</label>
              <textarea class="form-control" name="body" id="body" rows="8" cols="80"><?php echo $opened['body']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-default" name="submitted" value="1">Salveaza</button>
            <button type="submit" class="btn btn-default" name="submitted" value="0">Sterge</button>
            <input type="hidden" name="id" value="<?php echo $opened['id']?>">
          </form>
        </div>
      </div>

    </div>
