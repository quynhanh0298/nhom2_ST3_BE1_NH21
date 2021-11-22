<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Protype</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <?php
  $getAllProtype = $protype->getAllProtype();
  if (isset($_GET['type_id'])) {
    $id = $_GET['type_id'];
  } else $id = 0;
  foreach ($getAllProtype as $value) :
    if ($value['type_id'] == $id) :
  ?>
    <section class="content">
      <form action="protypes.php"method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputType_id">Type_id</label>
                <input type="number" id="inputType_id" class="form-control"name="type_id"value="<?php echo $value['type_id'] ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputType_name">Type_name</label>
                <input type="text" id="inputType_name" class="form-control"name="type_name"value="<?php echo $value['type_name'] ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="protypes.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit Protype" class="btn btn-success float-right" name="submitedit">
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
    <?php endif;
  endforeach ?>
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.html" ?>