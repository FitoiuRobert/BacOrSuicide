
    <div class="container-fluid">
      <div class="row">
        <h2 class="text-center">Administrare Categorii</h2><br><br>

        <div class="col-md-3">
            <?php #print_r($_POST); ?>
            <?php

              if (isset($_POST['submitted'])) {

                $title =  mysqli_real_escape_string($dbc,$_POST['title']);
                $label =  mysqli_real_escape_string($dbc,$_POST['label']);

                if($_POST['submitted'] == 1){

                  if($_POST['id'] != ''){
                    $q = "UPDATE cat_menu SET title='$title', label='$label', position='$_POST[position]' WHERE id=$_POST[id]";
                    $status = 'modificata';
                  }else {
                    $q = "INSERT INTO cat_menu (title, label, position) VALUES ('$title', '$label', '$_POST[position]')";
                    $status = 'adaugata';
                  }

                } elseif ($_POST['submitted'] == 0) {
                  if($_POST['id'] != ''){
                    $q = "DELETE FROM cat_menu WHERE id=$_POST[id]";
                    $status = 'stearsa';
                  }
                }
                  

                $r = mysqli_query($dbc,$q);

                if($r){
                  $message = '<p>Categoria a fost '.$status.'!</p>';
                } else{
                  $message = '<p>Categoria nu a fost '.$status.': '.mysqli_error($dbc).'</p>';
                  $message .= '<p>'.$q.'</p>';
                }

              }

             ?>

          <div class="list-group">
            <a href="?page=categories" class="list-group-item"><h3 class="list-group-item-heading">Adauga o categorie</h3></a>
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

            <button type="submit" class="btn btn-default" name="submitted" value="1">Salveaza</button>
            <button type="submit" class="btn btn-default" name="submitted" value="0">Sterge</button>
            <input type="hidden" name="id" value="<?php echo $opened['id']?>">
          </form>
        </div>
      </div>

    </div>
