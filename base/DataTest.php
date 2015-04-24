<?php

class DataTest extends PHPUnit_Framework_TestCase {

	/**
	* @dataProvider additionProvider
	*/
	public function testAdd($a, $b, $c)
	{
		$this->assertEquals($c, $a + $b);
	}

	public function additionProvider()
	{
		return array(
			array(0, 1, 1),
			array(1, 2, 3),
			array(2, 3, 4),
			array(1, 1, 3),
		);
	}
}
?>