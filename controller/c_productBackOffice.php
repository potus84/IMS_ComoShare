<?php
require_once 'model/m_accommodation.php';
	/**
	* 
	*/
	class cAccommodationBackOffice
	{
		// public function manageAccommodation()
		// {
		// 	//Models
		// 	$db = new Accommodation();
		// 	if(!isset($path_params[1])){
		// 		echo $path_params[1];
		// 		$houses=$db->getAccommodationGrid();
		// 		require 'view/v_productBackOffice.php';
		// 	} else{
		// 		switch($path_params[1]){
		// 			case 'insert':
		// 			//navigate to the insert form
		// 			header('Location: view/m_insertNewAccomodation.php');
		// 			//get the data return to the form

		// 			//get the modified data and call insert function
		// 			$roomname = $_REQUEST['roomname'];
		// 			$city = $_REQUEST['city'];
		// 			$lat = $_REQUEST['lat'];
		// 			$longi = $_REQUEST['longi'];
		// 			$img = $_REQUEST['img'];
		// 			$price = $_REQUEST['price'];
		// 			$availability = $_REQUEST['availability'];
		// 			$description = $_REQUEST['description'];
		// 			$db->insertNewAccommodation($roomname, $city, $lat, $longi, $img, $price, $availability, $description);
		// 			break;
		// 			case 'update':
		// 			break;
		// 			case 'delete':
		// 			//navigate to the update form

		// 			//get the data return to the form

		// 			//get the modified data and call update function
		// 			$id = $_REQUEST['id'];
		// 			echo $id;
		// 			echo $db->deleteAccomodation($id);
		// 			//header('Location: localhost/IMS_ComoShare/productBackOffice.php');
		// 			break;
		// 		}

		// 	}

		// 	//Views

		// }

		public function manageAccommodation(){
			$op = isset($_GET['op'])?$_GET['op']:NULL;

			try {
				$db = new Accommodation();
				echo $op;
				if ( !$op || $op == 'list' ) {

                //$this->listContacts();					
					$houses=$db->getAccommodationGrid();
					require 'view/v_productBackOffice.php';

				} elseif ( $op == 'new' ) {

					$this->saveContact($db);

				} elseif ( $op == 'delete' ) {

					echo "To here before call";
					$this->deleteContact($db);

				} elseif ( $op == 'update' ) {

					$this->updateContact($db);

				} else {

					$this->showError("Page not found", "Page for operation ".$op." was not found!");

				}

			} catch ( Exception $e ) {

				$this->showError("Application error", $e->getMessage());

			}
		}
		public function redirect($location) {
			header('Location: '.$location);
		}
		public function saveContact($db)
		{
			$title = 'Add new accommodation';
			$roomname = '';
			$city = '';
			$lat = '';
			$longi = '';
			$img = '';
			$price = '';
			$availability = '';
			$description = '';
			if(isset($_POST['form-submitted'])){
				$roomname = isset($_REQUEST['roomname'])?$_REQUEST['roomname']:NULL;
				$city = isset($_REQUEST['city'])?$_REQUEST['city']:NULL;
				$lat = isset($_REQUEST['lat'])?$_REQUEST['lat']:NULL;
				$longi = isset($_REQUEST['longi'])?$_REQUEST['longi']:NULL;
				//$img = isset($_REQUEST['img'])?$_REQUEST['img']:NULL;
				$uploads_dir = "images";
				$img = '' ;
				if (isset($_FILES['image'])){
    	$tmp_name = $_FILES['image']['tmp_name']; //temporary name
    $name = $_FILES['image']['name']; // original name
    $img= "$uploads_dir/".$name; //final name
    move_uploaded_file($tmp_name, $img);
} 



$price = isset($_REQUEST['price'])?$_REQUEST['price']:NULL;
$availability = isset($_REQUEST['availability'])?$_REQUEST['availability']:NULL;
$description = isset($_REQUEST['description'])?$_REQUEST['description']:NULL;
try {
	$db->insertNewAccommodation($roomname, $city, $lat, $longi, $img, $price, $availability, $description);
					//this->redirect('productBackOffice.php');
	header('Location: '.'productBackOffice.php');
} catch (Exception $e) {
	echo "Error".$e;
}

}

include 'view/v_AccomForm.php';
}
public function updateContact($db)
{
	$title = 'Update room';
	if(isset($_GET['id'])){
		$id = isset($_GET['id'])?$_GET['id']:-1;
		$house=$db->getAccommodation($id);
		$roomname = $house['roomname'];
		$city = $house['city'];
		$lat  = $house['lat'];
		$longi  = $house['longi'];
		$img  = $house['img'];
		$price  = $house['price'];
		$availability  = $house['availability'];
		$description  = $house['description'];
		if(isset($_POST['form-submitted'])){
			$roomname = isset($_REQUEST['roomname'])?$_REQUEST['roomname']:NULL;
			$city = isset($_REQUEST['city'])?$_REQUEST['city']:NULL;
			$lat = isset($_REQUEST['lat'])?$_REQUEST['lat']:NULL;
			$longi = isset($_REQUEST['longi'])?$_REQUEST['longi']:NULL;
			$uploads_dir = "images";
			$img = '' ;
			if (isset($_FILES['image'])){
    	$tmp_name = $_FILES['image']['tmp_name']; //temporary name
    $name = $_FILES['image']['name']; // original name
    $img= "$uploads_dir/".$name; //final name
    move_uploaded_file($tmp_name, $img);
} 
$price = isset($_POST['price'])?$_REQUEST['price']:NULL;
$availability = isset($_REQUEST['availability'])?$_REQUEST['availability']:NULL;
$description = isset($_REQUEST['description'])?$_REQUEST['description']:NULL;
try {
	$db->updateAccomodation($id, $roomname, $city, $lat, $longi, $img, $price, $availability, $description);
					//this->redirect('productBackOffice.php');

	header('Location: '.'productBackOffice.php');
} catch (Exception $e) {
	echo "Error".$e;
}
}


}


include 'view/v_AccomForm.php';
}


public function deleteContact($db)
{
	echo "Start delete<br/>";
	if (isset($_GET['id'])) {
		try {
			$id=$_GET['id'];
			$db->deleteAccomodation($id);
					//this->redirect('productBackOffice.php');
			header('Location: '.'productBackOffice.php');
		} catch (Exception $e) {
			echo "Error".$e;
		}
	}

} 
}
?>