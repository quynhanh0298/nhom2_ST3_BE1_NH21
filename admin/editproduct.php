<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Products</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <?php
  $getAllProducts = $product->getAllProducts();
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else $id = 0;
  foreach ($getAllProducts as $value) :
    if ($value['id'] == $id) :
  ?>
      <section class="content">
        <form action="products.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputID">ID</label>
                    <input type="text" id="inputID" class="form-control" value="<?php echo $value['id'] ?>" name="id" required>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" id="inputName" class="form-control" value="<?php echo $value['name'] ?>" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="inputManu_name">Manufacture</label>
                    <select id="inputManu_name" class="form-control custom-select" name="manu_id" required>
                      <?php
                      $getAllManu = $manu->getAllManu();
                      foreach ($getAllManu as $var) :
                      ?>
                        <option <?php if ($var['manu_id'] == $value['manu_id']) echo "selected" ?> value=<?php echo $var['manu_id'] ?>><?php echo $var['manu_name'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputProtype">Protype</label>
                    <select id="inputProtype" class="form-control custom-select" name="type_id" required>
                      <?php
                      $getAllProtype = $protype->getAllProtype();
                      foreach ($getAllProtype as $var) :
                      ?>
                        <option <?php if ($var['type_id'] == $value['type_id']) echo "selected" ?> value=<?php echo $var['type_id'] ?>><?php echo $var['type_name'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputPrice">Price</label>
                    <input type="number" id="inputPrice" value="<?php echo $value['price'] ?>" class="form-control" name="price" required>
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
                    <input type="file" id="inputPro_image" class="form-control" name="pro_image">
                    <br>
                    <img id="hinh" src="../img/<?php echo $value['pro_image'] ?>" alt="" style="width:100px">
                  </div>
                  <script>
                    const inputPro_image = document.querySelector('#inputPro_image');
                    const hinh = document.querySelector('#hinh');
                    inputPro_image.onchange = evt => {
                      const [file] = inputPro_image.files
                      if (file) {
                        hinh.src = URL.createObjectURL(file)
                      }
                    }
                  </script>
                  <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea id="inputDescription" class="form-control" rows="4" name="description" required><?php echo $value['description'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputFeature">Feature</label>
                    <select id="inputFeature" class="form-control custom-select" name="feature" required>
                      <option selected disabled>Select one</option>
                      <option <?php if ($value['feature'] == 0) echo 'selected' ?>>0</option>
                      <option <?php if ($value['feature'] == 1) echo 'selected' ?>>1</option>
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
              <input type="submit" name="submitedit" value="Edit Product" class="btn btn-success float-right">
            </div>
          </div>
        </form>
      </section>
  <?php endif;
  endforeach ?>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>