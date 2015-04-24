<?php

class ExceptionTest extends PHPUnit_Framework_TestCase
{
	/**
	* @expectedException InvalidArgumentException
	*/
	public function testException1()
	{
		throw new InvalidArgumentException("Error Processing Request", 1);

	}

	public function testException2()
	{
		$this->setExpectedException('InvalidArgumentException');
		throw new InvalidArgumentException();
	}

	public function testException3()
	{
		$this->setExpectedExceptionRegExp('InvalidArgumentException', '/right*/');
		throw new InvalidArgumentException('wrong');
	}

	public function testException4()
	{
		$this->setExpectedException('InvalidArgumentException', 'right', 2);
		throw new InvalidArgumentException('right', 1);
	}

	public function testException5()
	{
		try{
			throw new InvalidArgumentException;
		} catch(InvalidArgumentException $e) {
			return ;
		}

		$this->fail('test failed');
	}
}

?>