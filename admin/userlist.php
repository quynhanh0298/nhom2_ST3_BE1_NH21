<?php
include "header.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User List</h1>
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
                            <th>
                                User ID
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Role
                            </th>
                            <th>
                                Fullname
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Telephone
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getAllUser = $user->getAllUser();
                        foreach ($getAllUser as $value) :
                        ?>
                            <tr>
                                <td>
                                    <?php echo $value['user_id'] ?>
                                </td>
                                <td>
                                    <?php echo $value['username'] ?>
                                </td>
                                <td>
                                    <?php echo $value['role_id'] ?>
                                </td>
                                <td>
                                    <?php echo $value['fullname'] ?>
                                </td>
                                <td>
                                    <?php echo $value['email'] ?>
                                </td>
                                <td>
                                    <?php echo $value['address'] ?>
                                </td>
                                <td>
                                    <?php echo $value['telephone'] ?>
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