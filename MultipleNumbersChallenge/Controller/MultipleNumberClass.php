<?php
class ChallengeMultipleNumber {
	public function getMultipleNumer(){
		$numberStart = 1;
		$numberEnd = 100;

		while($numberStart <= $numberEnd){	
			switch($numberStart){
				case ($numberStart % 5 == 0 && $numberStart % 3 == 0 ):
					echo "Linianos ";
					break;
				case $numberStart % 3 == 0:			
					echo 'Linio ';
					break;
				case $numberStart % 5 == 0:
					echo "IT ";
					break;		
				default : echo $numberStart." ";
					break;
			}	
			$numberStart++;	
		}
	}
}

?>