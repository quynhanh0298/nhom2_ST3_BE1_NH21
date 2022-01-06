<?php
include "header.php";
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">CART</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">CART</li>
                </ul>
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
        <?php
        if (isset($_SESSION['cart']['qty']) && $_SESSION['cart']['qty'] > 0) { ?>
            <!-- row -->
            <div class="row">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 20%">
                                Name
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Manufacture
                            </th>
                            <th style="width: 8%">
                                Protype
                            </th>
                            <th>
                                Price
                            </th>
                            <th style="width: 10%">
                                Qty
                            </th>
                            <th style="width: 8%">
                                Total
                            </th>
                            <th style="width: 20%" class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getAllProducts = $product->getAllProductsWL();
                        $total = 0;
                        foreach ($getAllProducts as $value) :
                            if (isset($_SESSION['cart'][$value['id']]) && $_SESSION['cart'][$value['id']] > 0) {
                        ?>
                                <tr>
                                    <td>
                                        <a id="<?php echo $value['id'] ?>" class="id">
                                            <?php echo $value['name'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <img src="img/<?php echo $value['pro_image'] ?>" alt="" style="width : 100px">

                                    </td>
                                    <td>
                                        <?php echo $value['manu_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $value['type_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($value['price']) ?>
                                    </td>
                                    <td>
                                        <a href="decreasecart.php?id=<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">-</a>
                                        &emsp;<?php echo $_SESSION['cart'][$value['id']] ?>&emsp;
                                        <a href="increasecart.php?id=<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">+</a>
                                    </td>
                                    <td>
                                        <?php echo number_format($_SESSION['cart'][$value['id']] * $value['price']) ?>
                                    </td>
                                    <td class="project-actions text-center">
                                        <a class="btn btn-danger btn-sm" href="delcart.php?id=<?php echo $value['id'] ?>">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php $total += $_SESSION['cart'][$value['id']] * $value['price'];
                            }
                        endforeach ?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
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
                            <td class="project-actions text-center">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row text-right">
                <a class="primary-btn order-submit" href="indexcheckout.php">
                    </i>
                    Check Out
                </a>
            </div>
            <!-- /row -->
        <?php
        }else{ ?>
        <div class="row text-center"><h3>Your order is empty</h3></div>
        <?php
        }
        ?>
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php
include "footer.html";
?>