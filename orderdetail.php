<?php include "header.php" ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">ORDER DETAIL</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
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
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.html" ?>