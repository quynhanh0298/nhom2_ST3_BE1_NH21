<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Protypes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a class="btn btn-primary btn-sm" href="addprotype.php">
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
              Type_id
              </th>
              <th style="width: 20%">
              Type_name
              </th>
              <th style="width: 10%">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $getAllProtype = $protype->getAllProtype();
            foreach ($getAllProtype as $value) :
            ?>
              <tr>
                <td style="width: 10%">
                  <?php echo $value['type_id'] ?>
                </td>
                <td style="width: 20%">
                  <a>
                    <?php echo $value['type_name'] ?>
                  </a>
                </td>
              
                <td class="project-actions text-left" style="width: 10%">
                  <a class="btn btn-info btn-sm" href="editprotype.php">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="deleteprtype.php">
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