<?php
	/**
	* Class deals with table accommodation
	*/
	require_once('db.php');
	class User extends db
	{
		
		// For users
		public function getUsers() {
			$sql = "SELECT * from user";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

		public function getUser($id){
			$sql = "SELECT * FROM user WHERE id=$id";
			$this->setQuery($sql);
			return $this->loadRow();
		}

		public function getUserByNameAndPassword($username, $password) {
            $sql = "SELECT * FROM user WHERE username=$username AND password=$password";
            $this->setQuery($sql);
            return $this->loadRow();
        }

		//Insert
		public function insertNewUser($username, $password, $firstname, $lastname, $email, $phone)
		{
			$sql = "INSERT INTO user VALUES (?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array(NULL, $username, $password, $firstname, $lastname, $email, $phone);
			return $this->execute($param);
		}

		//Delete
		public function deleteUser($id){
			$sql = "DELETE FROM user WHERE id=?";
			$this->setQuery($sql);
			$param = array($id);
			echo $id;
			return $this->execute($param);
		}



	}
?>