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
          <h1>Order List</h1>
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
            $getAllCart = $cart->getAllCart();
            foreach ($getAllCart as $value) :
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>