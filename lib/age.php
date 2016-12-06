<?php
	class Age{
	
	public $age;
	
	public function Age($age) {
		$birth = new DateTime($age);
		$today = new DateTime();
		
		$diff = $today->diff($birth);
		return $diff;
	}
}


?>