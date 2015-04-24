<?php

function login($name, $pass){ return array('status' => 'succ', 'token' => 'ttt'); }
function getId($token){ return 1; }
function getMyPosts($token, $userid = 1){ return array(1); }


class UserTest extends PHPUnit_Framework_TestCase {

	/**
	* @depends testLogin
	*/
	public function testGetMyId($token)
	{
		$myid = getId($token);
		return $myid;
	}

	/**
	* @depends testLogin
	*/
	public function testListMyPosts($token)
	{
		$posts = getMyPosts($token);
		$this->assertEquals(1, count($posts));
	}

	public function testLogin()
	{
		$info = login('name', 'pass');
		$this->assertEquals(1, 2);
		$this->assertEquals('succ', $info['status']);

		return $info['token'];
	}

}

?>