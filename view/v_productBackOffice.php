<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Accommodation Management</title>
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
	<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="Swiper-3.3.1/dist/css/swiper.min.css">
	<link rel="stylesheet" href="bootstrap-star-rating/css/star-rating.css">
	<link rel="stylesheet" href="bootstrap-star-rating/themes/krajee-svg/theme.css">
</head>

<style type="text/css">
	.room_record {
		width: 250px;
		height: 350px;
		border: #CCC 1px solid;
		margin: 10px;
		.room-container{
			width: 100%;
		}

	}
</style>
<body>
	<?php include 'view/header.php';?>
	<div class="container fluid room-container">
		<h2>Accommodation Back Office</h2>
		<form action="productBackOffice.php?op=new">
			<input type="submit" value="Add new room" />
		</form>
		<span><a href="productBackOffice.php?op=new">Add new room</a></span>
		<?php foreach($houses as $house){?>
			<div class="room_record col-sm-4">
				<p><?php echo $house['roomname']?></p>
				<img src=<?php echo $house['img']?> width="200px">
				<p><?php echo $house['price']?> &euro;</p>
				<p>City: <?php echo $house['city']?></p>
				<button>Edit</button>
				<!-- <form action = "productBackOffice.php/delete?id=<?php echo $house['id']?>">
					<input type="submit" value="Delete" />
				</form> -->
				<a href="productBackOffice.php?op=update&id=<?php echo $house['id']?>">Edit</a>
				<a href="productBackOffice.php?op=delete&id=<?php echo $house['id']?>">Delete</a>
				<p><?php echo $house['description']?></p>
			</div>
			<?php } ?>


		</div>
		<?php require_once 'view/footer.php';?>
	</body>
	</html>