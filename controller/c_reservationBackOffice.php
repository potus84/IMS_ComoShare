<?php
require('model/m_reservation.php');	
require('model/m_accommodation.php');	
	/**
	* 
	*/
	class cReservationBackOffice
	{
		public function manageReservations(){
			$op = isset($_GET['op'])?$_GET['op']:NULL;
			if($op == 'approve'){
				$this->approveReservationOfUser();
			} if($op == 'delete'){
				$this->deleteReservationOfUser();
			}
			else{
				$this->showReservationForAdmin();
			}

		}

		public function approveReservationOfUser(){
			$db = new Reservation();
			if (isset($_GET['id'])) {
				try {
					$id=$_GET['id'];
					$db->approveReservation($id);
					header('Location: '.'reservationBackOffice.php');
				} catch (Exception $e) {
					echo "Error".$e;
				}
			}
		}

		public function deleteReservationOfUser(){
			$db = new Reservation();
			if (isset($_GET['id'])) {
				try {
					$id=$_GET['id'];
					$db->deleteReservation($id);
					header('Location: '.'reservationBackOffice.php');
				} catch (Exception $e) {
					echo "Error".$e;
				}
			}
		}
		public function showReservationForAdmin()
		{	
			$db = new Reservation();
			$extra_db = new Accommodation();
			$reserves = $db->showAllReservation();			
			require 'view/v_reservationBackOffice.php';			
		}
	}




		?>