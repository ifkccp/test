<?php

spl_autoload_register(function($class)
{
	$class_file = __DIR__ . '/' . ucfirst($class) . '.php';

	if(file_exists($class_file))
		require $class_file;
});