
    <div class="container-fluid">
      <div class="row">
        <h2 class="text-center">Administrare Pagini</h2>
        <div class="col-md-3">
          <div class="list-group">
            <?php #print_r($_POST); ?>
            <?php

              if (isset($_POST['submitted']) == 1) {

                $title =  mysqli_real_escape_string($dbc,$_POST['title']);
                $header =  mysqli_real_escape_string($dbc,$_POST['header']);
                $body =  mysqli_real_escape_string($dbc,$_POST['body']);

                $q = "INSERT INTO pages (cat_label, title, header,body) VALUES ('$_POST[cat_label]', '$title', '$header', '$body')";
                $r = mysqli_query($dbc,$q);

                if($r){
                  $message = '<p>Pagina a fost adaugata!</p>';
                } else{
                  $message = '<p>Pagina nu a fost adaugata: '.mysqli_error($dbc).'</p>';
                  $message .= '<p>'.$q.'</p>';
                }

              }

             ?>

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

          <form action="?page=pages" method="post">

            <div class="form-group">
              <label for="cat_label">Categorie:</label>
              <select name="cat_label" class="form-control" id="cat_label">
                <?php

                $q = "SELECT label,title FROM cat_menu ORDER BY position ASC";
                $r = mysqli_query($dbc,$q);

                while($cat = mysqli_fetch_assoc($r)){
                ?>
                  <option value="<?php echo $cat['label'];?>"><?php echo $cat['title']; ?></option>
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

            <button type="submit" class="btn btn-default">Salveaza</button>
            <input type="hidden" name="submitted" value="1">
          </form>

        </div>
      </div>

    </div>
