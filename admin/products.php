<?php include "header.php" ?>
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
              <th style="width: 8%" class="text-center">
                Protype
              </th>
              <th style="width: 20%">
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
                  <br />
                  <small>
                    Created 01.01.2019
                  </small>
                </td>
                <td>
                  <img src="../img/<?php echo $value['pro_image'] ?>" alt="" style="width : 100px">

                </td>
                <td class="project_progress">
                  <?php echo $value['price'] ?>
                </td>
                <td class="project-state">
                  <?php echo $value['manu_name'] ?>
                </td>
                <td class="project-state">
                  <?php echo $value['type_name'] ?>
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-info btn-sm" href="editproduct.php">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="deleteproduct.php">
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