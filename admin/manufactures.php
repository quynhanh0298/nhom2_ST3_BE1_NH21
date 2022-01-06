<?php include "header.php";
if (isset($_POST['submitadd'])) {
  $manu->addManufacture($_POST['Manu_name']);
}
if (isset($_POST['submitedit'])) {
  $manu->editManufacture($_POST['manu_id'], $_POST['manu_name']);
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manufactures</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a class="btn btn-primary btn-sm" href="addmanufacture.php">
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
              <th style="width: 10%">
                Manu_id
              </th>
              <th style="width: 20%">
                Manu_name
              </th>
              <th style="width: 10%">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $getAllManu = $manu->getAllManu();
            foreach ($getAllManu as $value) :
            ?>
              <tr>
                <td style="width: 10%">
                  <?php echo $value['manu_id'] ?>
                </td>
                <td style="width: 20%">
                  <a>
                    <?php echo $value['manu_name'] ?>
                  </a>
                </td>
                <td class="project-actions text-left" style="width: 10%">
                  <a class="btn btn-info btn-sm" href="editmanufacture.php?manu_id=<?php echo $value['manu_id'] ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <?php
                  if ($manu->checkCanDelete($value['manu_id'])) { ?>
                    <a id="delete" class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  <?php
                  } else {
                  ?>
                    <a id="delete" class="btn btn-danger btn-sm" href="">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  <?php
                  }
                  ?>
                </td>
              </tr>
            <?php endforeach ?>
            <script>
              const del = document.querySelectorAll('#delete');
              del.forEach((item) => {
                item.onclick = () => {
                  if (item.getAttribute("href") == "#") {
                    alert("Delete Succesfully!");
                    item.setAttribute("href", "deletemanufacture.php?manu_id=<?php echo $value['manu_id'] ?>")
                  } else {
                    alert("Cannot Delete!");
                  }
                }
              })
            </script>
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