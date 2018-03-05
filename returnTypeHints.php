<?php

// чтобы вызвать этот скрипт через консоль используем в консоли такую команду
// _>php ex.php 33

class User{}


interface SomeInterfaceUser{
	public function getUser():User;
}


/**
* 
*/
class SomeClass implements SomeInterfaceUser
{
	
	function getUser():User
	{
		return (new User);
	}
}

var_dump( (new SomeClass)->getUser() );