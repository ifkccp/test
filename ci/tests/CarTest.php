<?php

// require 'ci/src/Car.php';

class CarTest extends PHPUnit_Framework_TestCase {

	/**
	* @expectedException InvalidArgumentException
	*/ 
	public function testException()
	{
		$car = new Car();
	}

	public function testNewCar()
	{
		$car = new Car('kaka');
		$this->assertInstanceOf('Car', $car);

		return $car;
	}
}

?>