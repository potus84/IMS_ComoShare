<!doctype html>
<head>
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/moment.js"></script>	
	<script src="bootstrap-master/dist/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>

	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="css/product-detail.css">
	
</head>
<body>
	<?php
	include('header.php');
	?>

	<div class="main-form container col-sm-4 col-sm-offset-4">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
<!-- 			$roomname, $city, $lat, $longi, $img, $price, $availability, $description
 -->			
 			<div class="form-group">
				<label for="roomname">Name of the room</label>
				<input type="text" name="roomname" placeholder="At least 6 characters" class="form-control" value=<?php echo $roomname ?>>
			</div>
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" name="city" placeholder="Enter the name of the city" class="form-control" value=<?php echo $city ?> required>
			</div>
			<div class="form-group">
				<label for="lat">Latitude</label>
				<input type="float" name="lat" placeholder="Enter the latitude" class="form-control" value=<?php echo $lat ?> required>
			</div>
			<div class="form-group">
				<label for="longi">Longitude</label>
				<input type="float" name="longi" placeholder="Enter the longitude" class="form-control" value=<?php echo $longi ?> required>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" placeholder="Enter the path of image" class="form-control" value=<?php echo $img ?> required>
			</div>
			<div class="form-group">
				<label for="price">Price</label>
				<input type="number" name="price" placeholder="Enter the price" class="form-control" value=<?php echo $price ?> required>
			</div>
			<div class="form-group">
				<label for="availability">Availibility</label>
				<input type="number" name="availability" placeholder="Enter the availability" class="form-control" value=<?php echo $availability ?> required>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<!-- <textarea cols="20" rows="10" class="form-control" value=<?php echo $description ?>></textarea> -->
				<input type="text" name="description" placeholder="Characteristics" class="form-control" value=<?php echo $description ?> required>
			</div>
			<input type="hidden" name="form-submitted" value="1" />

			<div class="form-group">
				<div class="col-sm-4" style="padding: 0; float: right;">
					<input type="submit" name="register" class="btn btn-primary" value="Add new one">
				</div>
			</div>
		</form>
	</div>



</body>