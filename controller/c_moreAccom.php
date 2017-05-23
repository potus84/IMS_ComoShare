<?php
require 'model/m_accommodation.php';
class cMoreAccomodation
{
	
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