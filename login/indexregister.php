<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Register Page</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Register</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form action="register.php" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Username" name="username" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="Retype password" id="repassword" name="retypepassword" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-signature"></i></span>
							</div>
							<input type="text" class="form-control" pattern="[a-zA-Z0-9]{3,}(\s?\w+)*" placeholder="Fullname" name="fullname" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" class="form-control" pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+" placeholder="Email" name="email" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
							</div>
							<input type="text" maxlength="200" class="form-control" placeholder="Address" name="address" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
							</div>
							<input type="text" class="form-control" pattern="[0-9]{10,11}" placeholder="Telephone" name="telephone" required>
						</div>
						<div class="form-group">
							<input type="submit" id="submit" name="submit" value="Sign Up" class="btn float-right login_btn">
						</div>
					</form>
					<script>
						const form = document.querySelector('form');
						const pass = document.querySelector('#password');
						const repass = document.querySelector('#repassword');
						const submit = document.querySelector('#submit');
						submit.onclick = () => {
							let sm = pass.value;
							repass.setAttribute('pattern', sm);
						}
						form.onsubmit = (e) => {
							if (form.checkValidity() === false) {
								//Ngăn ko cho form được gửi đi
								e.preventDefault();
								e.stopPropagation()
							}
						}
						form.classList.add('was-validated');
					</script>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Already have an account?<a href="indexlogin.php">Sign In</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>