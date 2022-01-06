<?php include "header.php" ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">YOUR ORDER</h3>
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
        <!-- row -->
        <div class="row">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Order ID
                        </th>
                        <th>
                            Order Date
                        </th>
                        <th>
                            Product
                        </th>
                        <th style="width: 8%">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $getAllCartByUserId = $cart->getAllCartByUserId($_SESSION['user_id']);
                    foreach ($getAllCartByUserId as $value) :
                        $getCartDetailByCartId = $cartdetail->getCartDetailByCartId($value['cart_id']);
                    ?>
                        <tr>
                            <td>
                                <a href="orderdetail.php?cart_id=<?php echo $value['cart_id'] ?>"><?php echo $value['cart_id'] ?></a>
                            </td>
                            <td>
                                <?php echo $value['order_date'] ?>
                            </td>
                            <td>
                                <?php echo $getCartDetailByCartId[0]['product_name'] ?>... and <?php echo (count($getCartDetailByCartId) - 1) ?> other products
                            </td>
                            <td>
                                <?php echo $value['total'] ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.html" ?>