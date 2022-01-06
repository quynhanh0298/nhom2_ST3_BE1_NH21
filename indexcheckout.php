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
				<h3 class="breadcrumb-header">Checkout</h3>
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li class="active">Checkout</li>
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
		<!-- row -->
		<div class="row">
			<form action="checkout.php" method="post">
				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Billing address</h3>
						</div>
						<?php
						$getAllUsers = $user->getAllUser();
						foreach ($getAllUsers as $value) :
							if (isset($_SESSION['user']) && $value['user_id'] == $_SESSION['user_id']) {
						?>
								<div><strong>Fullname</strong></div>
								<div class="form-group">
									<input value="<?php echo $value['fullname'] ?>" class="input" type="text" name="fullname" placeholder="Full Name">
								</div>
								<div><strong>Email</strong></div>
								<div class="form-group">
									<input value="<?php echo $value['email'] ?>" class="input" type="email" name="email" placeholder="Email">
								</div>
								<div><strong>Address</strong></div>
								<div class="form-group">
									<input value="<?php echo $value['address'] ?>" class="input" type="text" name="address" placeholder="Address">
								</div>
								<div><strong>Telephone</strong></div>
								<div class="form-group">
									<input value="<?php echo $value['telephone'] ?>" class="input" type="tel" name="telephone" placeholder="Telephone">
								</div>
						<?php
							}
						endforeach ?>
					</div>
					<!-- /Billing Details -->
				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<div class="order-products">
							<?php
							$getAllProducts = $product->getAllProductsWL();
							$total = 0;
							foreach ($getAllProducts as $value) :
								if (isset($_SESSION['cart'][$value['id']]) && $_SESSION['cart'][$value['id']] > 0) {
							?>
									<div class="order-col">
										<div><?php echo $_SESSION['cart'][$value['id']] ?>x <?php echo $value['name'] ?></div>
										<div><?php echo number_format($_SESSION['cart'][$value['id']] * $value['price']) ?></div>
									</div>
							<?php $total += $_SESSION['cart'][$value['id']] * $value['price'];
								}
							endforeach;
							$_SESSION['total'] = $total;
							?>
						</div>
						<div class="order-col">
							<div>Shiping</div>
							<?php if ($total < 250000) { ?>
								<div><strong><?php echo number_format(15000) ?></strong></div>
								<?php $_SESSION['shipping_fee'] = 15000; ?>
							<?php } else { ?>
								<div><strong>FREE</strong></div>
								<?php $_SESSION['shipping_fee'] = 0; ?>
							<?php } ?>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total"><?php echo number_format($total) ?></strong></div>
						</div>
					</div>
					<div class="payment-method">
						<?php
						$getAllPaymentMethod = $paymentmethod->getAllPaymentMethod();
						foreach ($getAllPaymentMethod as $value) :
						?>
								<div class="input-radio">
									<input type="radio" name="payment" id="<?php echo $value['payment_method_id'] ?>">
									<label for="<?php echo $value['payment_method_id'] ?>">
										<span></span>
										<?php echo $value['payment_method_name'] ?>
									</label>
								</div>
						<?php endforeach ?>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="terms">
						<label for="terms">
							<span></span>
							I've read and accept the <a href="#">terms & conditions</a>
						</label>
					</div>
					<button type="submit" id="submit" name="submit" class="primary-btn order-submit float-right">Place order</button>
				</div>
				<!-- /Order Details -->
			</form>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.html" ?>