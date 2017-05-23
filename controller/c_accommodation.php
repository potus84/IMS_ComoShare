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
			$db = new Accommodation();
			$houses=$db->getRandomAccommodation($limit);
			//Views
			require 'view/v_moreAccom.php';

		}

		
		
		
		
		
		
	}
	
	
	
	
	?>