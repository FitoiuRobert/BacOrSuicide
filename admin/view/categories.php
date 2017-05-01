
    <div class="container-fluid">
      <div class="row">
        <h2 class="text-center">Administrare Categorii</h2><br><br>

        <div class="col-md-3">
          <div class="list-group">

            <?php

              if (isset($_POST['submitted']) == 1) {

                $title =  mysqli_real_escape_string($dbc,$_POST['title']);
                $label =  mysqli_real_escape_string($dbc,$_POST['label']);

                $q = "INSERT INTO cat_menu (title, label, position) VALUES ('$title', '$label', '$_POST[position]')";
                $r = mysqli_query($dbc,$q);

                if($r){
                  $message = '<p>Categoria a fost adaugata!</p>';
                } else{
                  $message = '<p>Categoria nu a fost adaugata: '.mysqli_error($dbc).'</p>';
                  $message .= '<p>'.$q.'</p>';
                }

              }

             ?>
            <?php
              $q = "SELECT * FROM cat_menu ORDER BY position";
              $r = mysqli_query($dbc,$q);

              while($cat_menu = mysqli_fetch_assoc($r)){
              ?>
              <a href="?page=categories&id=<?php echo $cat_menu['id']; ?>" class="list-group-item"><?php echo $cat_menu['title']; ?></a>
            <?php  } ?>
          </div>
        </div>

        <div class="col-md-9">
          <?php

          if(isset($_GET['id'])){
            $q = "SELECT * FROM cat_menu WHERE id=$_GET[id]";
            $r = mysqli_query($dbc,$q);

            $opened = mysqli_fetch_assoc($r);
          }

           ?>
          <?php if(isset($message)){ echo $message; } ?>

          <form action="?page=categories" method="post">
            <div class="form-group">
              <label for="title">Nume:</label>
              <input type="text" class="form-control" id="title" name="title" value="<?php echo $opened['title']; ?>" placeholder="Numele categoriei">
            </div>

            <div class="form-group">
              <label for="label">Eticheta(Label):</label>
              <input type="text" class="form-control" id="label" name="label" value="<?php echo $opened['label']; ?>" placeholder="Eticheta categoriei">
            </div>

            <div class="form-group">
              <label for="position">Pozitie:</label>
              <input type="text" class="form-control" id="position" name="position" value="<?php echo $opened['position']; ?>" placeholder="Pozitia categoriei">
            </div>

            <button type="submit" class="btn btn-default">Salveaza</button>
            <input type="hidden" name="submitted" value="1">
          </form>
        </div>
      </div>

    </div>
