
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked">
            <?php cat_nav($dbc); ?>
          </ul>
        </div>

        <div class="col-md-9">
          <div class="container-fluid">
            <?php page($dbc,$_GET['page']); ?>
          </div>
        </div>

      </div>

    </div>
