<?php

class FixtureTest extends PHPUnit_Framework_TestCase {

	public static function setUpBeforeClass()
	{
		// connect_db();
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	protected function setUp()
	{
		// $this->user = new User();
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	protected function assertPreConditions()
	{
		// $this->assertInstanceOf(User, $this->user);
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	public function testOne()
	{
		// $this->update($this->user);
		fwrite(STDOUT, __METHOD__ . "\n");
		$this->assertTrue(TRUE);
	}

	public function testTwo()
	{
		// $this->remove($this->user);
		fwrite(STDOUT, __METHOD__ . "\n");
		$this->assertTrue(FALSE);
	}

	protected function assertPostConditions()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	protected function tearDown()
	{
		// unset($this->user);
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	public static function tearDownAfterClass()
	{
		// release_db();
		fwrite(STDOUT, __METHOD__ . "\n");
	}

	protected function onNotSuccessfulTest(Exception $e)
	{
		// $this->log($this->user);
		fwrite(STDOUT, __METHOD__ . "\n");
		throw $e;
	}

}