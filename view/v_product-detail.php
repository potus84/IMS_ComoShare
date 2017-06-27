<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<head>
	<title>CommoShare - <?php echo $room['roomname']?> details</title>
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
	<style type="text/css">

		#map {
			height: 400px;
			background-color: grey;
		}		
	</style>
</head>
<body>
	<?php
	include('view/header.php');
	?>
	<div class="room-detail container">
		<div class="left-img col-sm-6">
			<div class="ft-img" style="background-image: url(<?php echo $room['img']?>)">
				
			</div>

		</div> <!-- /left image -->
		<div class="right-des col-sm-6">
			<h2><?php echo $room['roomname']?></h2>
			<p><?php echo $room['description']?></p>
			<span>Price: </span>
			<label class="price"><?php echo $room['price']?>&euro;</label>
			<div id="map"></div>
			<div class="btnBook">
				<a href="puttingDate.php?accommodation_id=<?php echo $room['id']?>">Books</a>
				
			</div>
		</div> <!-- /right content -->
		<div id="map col-sm-6" class="col-sm-6">			
		</div>
	</div>
	
	<script>
		function initMap() {
			var uluru = {lat: <?php echo $room['lat']?>, lng: <?php echo $room['longi']?>};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ1zHK_IvWkr42rtz2soBFiq0r9EgW_xQ&callback=initMap">
</script>
<?php
	include 'view/footer.php';
?>
</body>