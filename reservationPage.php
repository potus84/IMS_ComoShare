<?php
	include 'controller/c_reservation.php';
	$_SESSION['user_id'] = 13; //change later
	$c_reservation = new cReservation();
	$c_reservation->manageReservationForUser();


?>