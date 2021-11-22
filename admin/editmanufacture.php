<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Manufacture</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <?php
  $getAllManu = $manu->getAllManu();
  if (isset($_GET['manu_id'])) {
    $id = $_GET['manu_id'];
  } else $id = 0;
  foreach ($getAllManu as $value) :
    if ($value['manu_id'] == $id) :
  ?>
    <section class="content">
      <form action="manufactures.php"method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputManu_id">Manu_id</label>
                <input type="number" id="inputManu_id" class="form-control"name="manu_id"value="<?php echo $value['manu_id'] ?>">
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
                <label for="inputManu_name">Manu_name</label>
                <input type="text" id="inputManu_name" class="form-control"name="manu_name"value="<?php echo $value['manu_name'] ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="manufactures.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Edit Manufacture" class="btn btn-success float-right"name="submitedit">
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