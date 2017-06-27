<?php
require 'model/m_accommodation.php';
	class cProductDetail
	{		
		public function showRoomDetails()
		{
			//Models
			$db = new Accommodation();
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$room = $db->getAccommodation($id);
				require 'view/v_product-detail.php';
			}else{
				header('Location: index.php');
				echo "Sorry, please put id into it first";
			}
			//Views
			
		}
		
		
		
		
		
		
	}	
	
	
	
?>