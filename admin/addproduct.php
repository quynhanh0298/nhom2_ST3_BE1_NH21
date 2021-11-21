<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Products</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="products.php" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label for="inputManu_id">Manu_id</label>
                <input type="number" id="inputManu_id" class="form-control" name="manu_id" required>
              </div>
              <div class="form-group">
                <label for="inputType_id">Type_id</label>
                <input type="number" id="inputType_id" class="form-control" name="type_id" required>
              </div>
              <div class="form-group">
                <label for="inputPrice">Price</label>
                <input type="number" id="inputPrice" class="form-control" name="price" required>
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
                <label for="inputPro_image">Pro_image</label>
                <input type="text" id="inputPro_image" class="form-control" name="pro_image" required>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" name="description" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputFeature">Feature</label>
                <select id="inputFeature" class="form-control custom-select" name="feature" required>
                  <option selected disabled>Select one</option>
                  <option>0</option>
                  <option>1</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="products.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" name="submitadd" value="Create new Product" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>