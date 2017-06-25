<?php
	/**
	* Class deals with table reservation
	*/
	require_once('db.php');
	class Reservation extends db
	{		

		/*
		*For users
		*/
		//Insert new reservation record
		public function insertReservation($user_id, $accommodation_id, $check_in, $check_out)
		{
			$sql = "INSERT INTO reservation VALUES (?, ?, ?, ?, ?, ?)";
			$this->setQuery($sql);
			$param = array(NULL, $check_in, $check_out, NULL, $accommodation_id, $user_id);
			return $this->execute($param);
		}
		// Show the reservation
		public function showReservation($user_id)
		{
			$sql = "SELECT * FROM reservation WHERE user_id=$user_id";
			$this->setQuery($sql);
			//print_r(this->loadAllRows());
			return $this->loadAllRows();
		}
		// Cancel the reservation
		public function cancelReservation($id)
		{
			$sql = "UPDATE reservation SET status=? WHERE id=?";
			$this->setQuery($sql);
			$param = array(-1, $id);
			return $this->execute($param);
		}

		/*
		*For admin
		*/

		public function showAllReservation(){

			$sql = "SELECT * from reservation";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function approveReservation($id)
		{
			$sql = "UPDATE reservation SET status=? WHERE id=?";
			$this->setQuery($sql);
			$param = array(1, $id);
			return $this->execute($param);
		}

		public function deleteReservation($id)
		{
			$sql = "DELETE FROM reservation WHERE id=?";
			$this->setQuery($sql);
			$param = array($id);
			return $this->execute($param);
		}
	}
?>