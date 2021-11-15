<?php
include "header.php";
$getAllProducts = $product->getAllProducts();
$get10NewestProducts = $product->get10NewestProducts();
//var_dump($getAllProducts);
?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="products-tabs">
					<!-- tab -->
					<div id="tab1" class="tab-pane active">
						<div class="products-slick" data-nav="#slick-nav-0">
							<!-- shop -->
							<div class="col-md-4 col-xs-6">
								<div class="shop">
									<div class="shop-img">
										<img src="./img/1_iphone_12_pro_max.jpg" alt="">
									</div>
									<div class="shop-body">
										<h3>Smartphones<br>Collection</h3>
										<a href="result.php?type_id=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /shop -->

							<!-- shop -->
							<div class="col-md-4 col-xs-6">
								<div class="shop">
									<div class="shop-img">
										<img src="./img/2_asus-zenbook.jpg" alt="">
									</div>
									<div class="shop-body">
										<h3>Laptops<br>Collection</h3>
										<a href="result.php?type_id=2" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /shop -->
							<!-- shop -->
							<div class="col-md-4 col-xs-6">
								<div class="shop">
									<div class="shop-img">
										<img src="./img/7_xiaomi-11-lite-5g.jpg" alt="">
									</div>
									<div class="shop-body">
										<h3>Tablet<br>Collection</h3>
										<a href="result.php?type_id=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /shop -->

							<!-- shop -->
							<div class="col-md-4 col-xs-6">
								<div class="shop">
									<div class="shop-img">
										<img src="./img/4_mi-band-6.jpg" alt="">
									</div>
									<div class="shop-body">
										<h3>Smart Watches<br>Collection</h3>
										<a href="result.php?type_id=4" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /shop -->

							<!-- shop -->
							<div class="col-md-4 col-xs-6">
								<div class="shop">
									<div class="shop-img">
										<img src="./img/5_airpods-pro.jpg" alt="">
									</div>
									<div class="shop-body">
										<h3>Bluetooth Earbuds<br>Collection</h3>
										<a href="result.php?type_id=5" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /shop -->
						</div>
						<div id="slick-nav-0" class="products-slick-nav"></div>
					</div>
					<!-- /tab -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
							<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
							<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
							<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php foreach ($get10NewestProducts as $value) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($value['price']) ?> VND</h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
									<!-- /product -->
								<?php endforeach ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Featured products</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Smartphones</a></li>
							<li><a data-toggle="tab" href="#tab2">Laptops</a></li>
							<li><a data-toggle="tab" href="#tab3">Tablets</a></li>
							<li><a data-toggle="tab" href="#tab4">Smart Watches</a></li>
							<li><a data-toggle="tab" href="#tab5">Bluetooth Earbuds</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab1 -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<?php
								$getFeaturedProducts = $product->getFeaturedProducts(1);
								foreach ($getFeaturedProducts as $value) {
								?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo $value['price'] ?></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								<?php
								}
								?>
								<!-- /product -->

							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab1 -->

						<!-- tab2 -->
						<div id="tab2" class="tab-pane fade">
							<div class="products-slick" data-nav="#slick-nav-3">
								<?php
								$getFeaturedProducts = $product->getFeaturedProducts(2);
								foreach ($getFeaturedProducts as $value) {
								?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo $value['price'] ?></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								<?php
								}
								?>
								<!-- /product -->

							</div>
							<div id="slick-nav-3" class="products-slick-nav"></div>
						</div>
						<!-- /tab2 -->

						<!-- tab3 -->
						<div id="tab3" class="tab-pane fade">
							<div class="products-slick" data-nav="#slick-nav-4">
								<?php
								$getFeaturedProducts = $product->getFeaturedProducts(3);
								foreach ($getFeaturedProducts as $value) {
								?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo $value['price'] ?></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								<?php
								}
								?>
								<!-- /product -->

							</div>
							<div id="slick-nav-4" class="products-slick-nav"></div>
						</div>
						<!-- /tab3 -->

						<!-- tab4 -->
						<div id="tab4" class="tab-pane fade">
							<div class="products-slick" data-nav="#slick-nav-5">
								<?php
								$getFeaturedProducts = $product->getFeaturedProducts(4);
								foreach ($getFeaturedProducts as $value) {
								?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo $value['price'] ?></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								<?php
								}
								?>
								<!-- /product -->

							</div>
							<div id="slick-nav-5" class="products-slick-nav"></div>
						</div>
						<!-- /tab4 -->

						<!-- tab5 -->
						<div id="tab5" class="tab-pane fade">
							<div class="products-slick" data-nav="#slick-nav-6">
								<?php
								$getFeaturedProducts = $product->getFeaturedProducts(5);
								foreach ($getFeaturedProducts as $value) {
								?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/<?php echo $value['pro_image'] ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
											<h4 class="product-price"><?php echo $value['price'] ?></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								<?php
								}
								?>
								<!-- /product -->

							</div>
							<div id="slick-nav-6" class="products-slick-nav"></div>
						</div>
						<!-- /tab5 -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<?php
include "footer.html";
?>