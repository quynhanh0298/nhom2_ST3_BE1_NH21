<?php include "header.php" ?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">EDIT PROFILE</h3>
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
                <form action="editprofile.php" method="post">
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
					<button type="submit" id="submit" name="submit" class="primary-btn order-submit float-right">Edit</button>
                </form>
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php include "footer.html" ?>