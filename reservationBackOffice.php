<?php
	include 'controller/c_reservationBackOffice.php';
	$c_reservationBackOffice=new cReservationBackOffice();
    $c_reservationBackOffice->manageReservations();
?>