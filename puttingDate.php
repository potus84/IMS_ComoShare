<!doctype html>
<head>
	<title>CommoShare - Reservation Page</title>
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
	include('view/header.php');
	?>

	<div class="main-form container col-sm-4 col-sm-offset-4">
		<h2>MAKE A RESERVATION</h2>
		<form action="reservationPage.php?op=book" method="POST" role="form" enctype="multipart/form-data">
<!-- 			<div class="form-group">
				<label for="fullname">Full name</label>
				<input type="text" name="fullname" placeholder="At least 6 characters" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email-register" class="form-control" placeholder="sample@proxy.com" required>
			</div>
			<div class="form-group">
				<label for="email">Confirm email</label>
				<input type="email" name="email-confirmation" placeholder="Confirm your email again" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" placeholder="At least 6 characters" class="form-control">
			</div>
			<div class="form-group">
				<label for="phonenumber">Phone number</label>
				<input type="text" name="phonenumber" placeholder="At least 10 digits" class="form-control" required>
			</div> -->
			<input type="hidden" name="accommodation_id" value = <?php echo $_GET['accommodation_id'] ?>>
			<div class="form-group">
				<label>Check-in</label>
				<div class='input-group date' id='datetimepicker1'>
					<input type='text' class="form-control" name="check_in" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label>Check-out</label>
				<div class='input-group date' id='datetimepicker2'>
					<input type='text' class="form-control" name="check_out" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-4" style="padding: 0; float: right;">
					<input type="submit" class="btn btn-primary" value="Book">
				</div>
			</div>
		</form>
	</div>
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker1').datetimepicker({format: 'YY-MM-DD'});
			$('#datetimepicker2').datetimepicker({format: 'YY-MM-DD'});
			$('#datetimepicker2').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
			$("#datetimepicker1").on("dp.change", function (e) {
				$('#datetimepicker2').data("DateTimePicker").minDate(e.date);
			});
			$("#datetimepicker2").on("dp.change", function (e) {
				$('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
			});
		});
	</script>


</body>