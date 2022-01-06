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
                    <h1>Order Detail</h1>
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
                            <th style="width: 50%">
                                Product Name
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Qty
                            </th>
                            <th style="width: 8%">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['cart_id'])) {
                            $getCartDetailByCartId = $cartdetail->getCartDetailByCartId($_GET['cart_id']);
                            $total = 0;
                            foreach ($getCartDetailByCartId as $value) :
                        ?>
                                <tr>
                                    <td>
                                        <?php echo $value['product_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($value['price']) ?>
                                    </td>
                                    <td>
                                        <?php echo $value['qty'] ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($value['total']) ?>
                                    </td>
                                </tr>
                        <?php $total += $value['total'];
                            endforeach;
                        } ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                Total
                            </td>
                            <td>
                                <?php echo number_format($total) ?>
                            </td>
                        </tr>
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