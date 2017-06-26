<?php
require('model/m_accommodation.php');	
	/**
	* 
	*/
	class cAccommodation
	{
		
		
		public function showHouses()
		{
			//Models
			$db = new Accommodation();
			if($id=isset($_GET['id'])){
				$room = $db->getAccommodation($id);
			}else{
				$houses=$db->getAccommodationGrid();
			}
			//Views
			require 'view/v_index.php';
		}

		public function showMoreHouses($limit)
		{
			//Models
			//$houses='';
			$db = new Accommodation();
			if(isset($_REQUEST['loc'])){
				$location = $_REQUEST['loc'];
				$houses=$db->getAccommodationByLocation($location, $limit);
				
			} else if(isset($_REQUEST['size'])){
				$size = $_REQUEST['size'];
				$houses=$db->getAccommodationByAvailibility($size, $limit);
			}
			else {
				$houses=$db->getRandomAccommodation($limit);
				//require 'view/v_moreAccom.php';
			}
			//Views
			require 'view/v_moreAccom.php';

		}

		
		
		
		
		
		
	}
	
	
	
	
	?>