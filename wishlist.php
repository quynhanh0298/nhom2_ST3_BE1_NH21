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
				<h3 class="breadcrumb-header">Wish List</h3>
				<ul class="breadcrumb-tree">
					<li><a href="index.php">Home</a></li>
					<li class="active">Wish List</li>
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
        if (isset($_SESSION['wishlist']['qty']) && $_SESSION['wishlist']['qty'] > 0) { ?>
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
							Price
						</th>
						<th>
							Manufacture
						</th>
						<th style="width: 8%">
							Protype
						</th>
						<th style="width: 20%" class="text-center">
							Action
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$getAllProducts = $product->getAllProductsWL();					
					foreach ($getAllProducts as $value) :
						if (isset($_SESSION['wishlist'][$value['id']]) && $_SESSION['wishlist'][$value['id']] > 0) {
					?>
						<tr>
							<td>
								<a>
									<?php echo $value['name'] ?>
								</a>
							</td>
							<td>
								<img src="img/<?php echo $value['pro_image'] ?>" alt="" style="width : 100px">

							</td>
							<td>
								<?php echo $value['price'] ?>
							</td>
							<td>
								<?php echo $value['manu_name'] ?>
							</td>
							<td>
								<?php echo $value['type_name'] ?>
							</td>
							<td class="project-actions text-center">
								<a class="btn btn-danger btn-sm" href="delwishlist.php?id=<?php echo $value['id'] ?>">
									Delete
								</a>
							</td>
						</tr>
					<?php } endforeach ?>
				</tbody>
			</table>
		</div>
		<!-- /row -->
		<?php
        }else{ ?>
        <div class="row text-center"><h3>Your wishlist is empty</h3></div>
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