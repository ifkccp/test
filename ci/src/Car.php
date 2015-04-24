<?php

class Car {
	
	private $_color = 'green';

	public function __construct($name = null)
	{
		if(!$name)
			throw new InvalidArgumentException('给车取个名字呀~');

		$this->name = $name;
	}
}