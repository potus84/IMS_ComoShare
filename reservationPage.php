<!doctype html>
<head>
	<title>CommoShare - Main page</title>
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
	<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="Swiper-3.3.1/dist/css/swiper.min.css">
	<link rel="stylesheet" href="bootstrap-star-rating/css/star-rating.css">
	<link rel="stylesheet" href="bootstrap-star-rating/themes/krajee-svg/theme.css">
	<!-- <link rel="stylesheet" href="css/index.css"> -->
	<link rel="stylesheet" href="css/product-detail.css">
</head>
<body>
	<?php
	include('header.php');
	?>
	<div class="container">
		<form action="register.php" method="POST" role="form">
			<div class="form-group">
				<label for="fullname">Full name</label>
				<input type="text" name="fullname" placeholder="At least 6 characters" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email-register" class="form-control" placeholder="sample@proxy.com" required>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" placeholder="Tối thiểu 6 ký tự" class="form-control">
			</div>
			<div class="form-group">
				<label for="phonenumber">Phone number</label>
				<input type="text" name="phonenumber" placeholder="At least 10 digits" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Confirm email</label>
				<input type="email" name="email-confirmation" placeholder="Confirm your email again" class="form-control" required>
			</div>

			<div class="form-group">
				<div class="col-sm-4" style="padding: 0;">
					<input type="submit" name="register" class="btn btn-primary" value="Đăng ký">
				</div>
			</div>
		</div>
	</form>
</div>



</body>