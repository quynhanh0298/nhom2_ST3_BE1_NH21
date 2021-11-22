<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Manufacture</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="manufactures.php" method="post">
      <div class="row">
         <div class="col">
          <div class="card card-secondary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputManu_name">Manu_name</label>
                <input type="text" id="inputManu_name" class="form-control" name="Manu_name"required>
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
          <input type="submit" value="Create new Manufacture" class="btn btn-success float-right" name="submitadd">
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.html" ?>