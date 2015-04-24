<?php

class OutputTest extends PHPUnit_Framework_TestCase {

	public function testOutput1()
	{
		$this->expectOutputString('foo');
		print 'foo';
	}

	public function testOutput2()
	{
		$this->expectOutputRegex('/bar.*/');
		print 'bar';
	}

	public function testOutput3()
	{
		$this->setOutputCallback(function ($a)
		{
			return "\n" . '⊙' . $a . '⊙';
		});

		print '_';
	}

}
?>