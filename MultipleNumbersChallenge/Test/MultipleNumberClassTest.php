<?php
require_once('..\Controller\MultipleNumberClass.php');
use PHPUnit\Framework\TestCase;
class MultipleNumberClassTest  extends PHPunit_Framework_Testcase {
	
	public function testMultiples (){
		$multipleNumbers = new ChallengeMultipleNumber();		
		$this->assertTrue($multipleNumbers->getMultipleNumer() !== false);
	}
}

?>