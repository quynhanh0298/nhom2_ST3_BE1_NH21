<?php 
include "header.php";
if (isset($_POST['submitedit'])) {
  $product -> editProduct($_POST['id'], $_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $_FILES['pro_image']['name'], $_POST['description'], $_POST['feature']);
  $target_dir = "../img/";
  $target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
  move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file);
}
if (isset($_POST['submitadd'])) {
  $product -> addProduct($_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $_FILES['pro_image']['name'], $_POST['description'], $_POST['feature']);
  $target_dir = "../img/";
  $target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
  move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file);
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a class="btn btn-primary btn-sm" href="addproduct.php">
              Add New
            </a>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                ID
              </th>
              <th style="width: 20%">
                Name
              </th>
              <th>
                Image
              </th>
              <th>
                Price
              </th>
              <th>
                Manufacture
              </th>
              <th style="width: 8%">
                Protype
              </th>
              <th style="width: 20%" class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $getAllProducts = $product->getAllProducts();
            foreach ($getAllProducts as $value) :
            ?>
              <tr>
                <td>
                  <?php echo $value['id'] ?>
                </td>
                <td>
                  <a>
                    <?php echo $value['name'] ?>
                  </a>
                </td>
                <td>
                  <img src="../img/<?php echo $value['pro_image'] ?>" alt="" style="width : 100px">

                </td>
                <td>
                  <?php echo $value['price'] ?>
                </td>
                <td>
                  <?php echo $value['manu_name'] ?>
                </td>
                <td>
                  <?php echo $value['type_name'] ?>
                </td>
                <td class="project-actions text-center">
                  <a class="btn btn-info btn-sm" href="editproduct.php?id=<?php echo $value['id'] ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="deleteproduct.php?id=<?php echo $value['id'] ?>">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>