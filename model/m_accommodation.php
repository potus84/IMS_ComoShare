<?php
	/**
	* Class deals with table accommodation
	*/
	require_once('db.php');
	class Accommodation extends db
	{
		
		// For users
		public function getAccommodationGrid() {
			$sql = "SELECT * from accommodation";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getRandomAccommodation($limit){
			$sql = "SELECT * FROM accommodation ORDER BY rand() LIMIT $limit";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function getAccommodation($id){
			$sql = "SELECT * FROM accommodation WHERE id=$id";
			$this->setQuery($sql);
			return $this->loadRow();
		}
		public function getAccommodationByLocation($location, $limit){
			$sql = "SELECT * FROM accommodation WHERE city='{$location}'";
			echo $location;
			$this->setQuery($sql);
			//print_r(this->loadAllRows());
			return $this->loadAllRows();
		}
		public function getAccommodationByAvailibility($availability, $limit){
			$sql = "SELECT * FROM accommodation WHERE `availability` = $availability";
			$this->setQuery($sql);
			//print_r(this->loadAllRows());
			return $this->loadAllRows();
		}
		/*
		*For admin
		*/
		//Insert
		public function insertNewAccommodation($roomname, $city, $lat, $longi, $img, $price, $availability, $description)
		{
			$sql = "INSERT INTO accommodation VALUES (?,?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array(NULL, $roomname, $city, $lat, $longi, $img, $price, $availability, $description);
			return $this->execute($param);
		}
		//Update 
		public function updateAccomodation($id, $roomname, $city, $lat, $longi, $img, $price, $availability, $description)
		{
			$sql = "UPDATE accommodation SET roomname=?, city=?, lat=?, longi=?, img=?, price=?, availability=?, description=? WHERE id=?";
			$this->setQuery($sql);
			$param = array($roomname, $city, $lat, $longi, $img, $price, $availability, $description, $id);
			//print_r($param)."<br/>";
			return $this->execute($param);
			// $dbh = new mysqli('localhost','root', '', 'ims');
			// $sql = "UPDATE accommodation SET roomname=?, city=?, lat=?, longi=?, img=?, price=?, availability=?, description=? WHERE id=?";
			// $stmt=$dbh->prepare($sql);
			// $stmt->bind_param("ssddsiisi", $roomname, $city, $lat, $longi, $img, $price, $availability, $description, $id);
			// return $stmt->execute();
			
			// //$cursor = $dbh->prepare($sql);


		}
		//Delete
		public function deleteAccomodation($id){
			$sql = "DELETE FROM accommodation WHERE id=?";
			$this->setQuery($sql);
			$param = array($id);
			echo $id;
			return $this->execute($param);
		}



	}
?>