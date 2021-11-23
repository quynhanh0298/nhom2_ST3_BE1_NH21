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
    <form action="products.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label for="inputManu_name">Manufacture</label>
                <select id="inputManu_name" class="form-control custom-select" name="manu_id" required>
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllManu = $manu->getAllManu();
                  foreach ($getAllManu as $value) :
                  ?>
                    <option value=<?php echo $value['manu_id'] ?>><?php echo $value['manu_name'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProtype">Protype</label>
                <select id="inputProtype" class="form-control custom-select" name="type_id" required>
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllProtype = $protype->getAllProtype();
                  foreach ($getAllProtype as $value) :
                  ?>
                    <option value=<?php echo $value['type_id'] ?>><?php echo $value['type_name'] ?></option>
                  <?php endforeach ?>
                </select>
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
                <input type="file" id="inputPro_image" class="form-control" name="pro_image" required>
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