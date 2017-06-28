<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



require('model/m_reservation.php');	
require('model/m_accommodation.php');	
	/**
	* 
	*/
	class cReservation
	{
		public function manageReservationForUser(){
			$op = isset($_GET['op'])?$_GET['op']:NULL;
			if($op == 'cancel'){
				$this->cancelReservationForUser();
			} else if($op == 'book'){
				$this->makeReservation();
			} else{
				$this->showReservationForUser();
			}
		}
		public function showReservationForUser()
		{
			$db = new Reservation();
			$extra_db = new Accommodation();
			if(isset($_SESSION['user_id'])){
				$user_id = $_SESSION['user_id'];
				$reserves = $db->showReservation($user_id);
				require 'view/v_showReservation.php';
				// if(is_array($reserves) || is_object(reserves)){
				// 	foreach ($reserves as $reserve) {

				// 		if(isset($reserve['accommodation_id'])){
				// 			$accommodation_id = $reserve['accommodation_id'];
				// 			$house = $extra_db->getAccommodation($accommodation_id);

							
				// 		} else {
				// 			$house = NULL;
				// 			echo 'Nothing found';
				// 		}
				// 		$reserve[] = array('house' => $house); //not sure
				// 	}

				// }

			} else{
				echo 'Please logging in to continue';
				header('Location: '.'login.php');
			}
			
		}

		public function cancelReservationForUser()
		{
			$db = new Reservation();
			if (isset($_GET['id'])) {
				try {
					$id=$_GET['id'];
					$db->cancelReservation($id);
					header('Location: '.'myReservation.php');
				} catch (Exception $e) {
					echo "Error".$e;
				}
			}
		}

		public function makeReservation()
		{
			$db = new Reservation();
			echo 'Here to make reservation';
			//$check_in = date("Y-m-d", strtotime($_REQUEST['check_in']));
			//$check_out = date("Y-m-d", strtotime($_REQUEST['check_out']));
			$check_in=$_REQUEST['check_in'];
			$check_out=$_REQUEST['check_out'];
			$user_id = $_SESSION['user_id'];
			$accommodation_id = $_POST['accommodation_id'];
			$conn = new mysqli("localhost", "root", "", "ims");
			//$user_id, $accommodation_id, $check_in, $check_out
			$sql = "INSERT INTO reservation(`check_in`, `check_out`, `accommodation_id`, `user_id`) VALUES (?, ?, ?, ?)";			 
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssii", $check_in, $check_out, $accommodation_id, $user_id);
			if ($stmt->execute()) {
				$last_id = $conn->insert_id;
				echo "Done";
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

            //header('Refresh: 5; URL = myReservation.php');
			header('Location: '.'myReservation.php');


			
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