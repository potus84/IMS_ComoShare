<?php
require 'model/m_accommodation.php';
class cMoreAccomodation
{
	
	public function showMoreHouses($limit)
		{
			//Models
			$db = new Accommodation();
			if(isset($_REQUEST['loc'])){
				$location = $_REQUEST['loc'];
				$houses=$db->getRandomAccommodation($location, $limit);
			} else {
				//$houses=$db->getRandomAccommodation($limit);
			}
			//Views
			require 'view/v_moreAccom.php';
		}
}
?>