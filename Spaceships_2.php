<?php

class User
{
	protected $name;
	protected $age;

	function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	function age()
	{
		return $this->age;
	}


	function name()
	{
		return $this->name;
	}
}


class UserCollection
{
	public $users;

	function __construct(array $users)
	{
		$this->users = $users;
	}

	function sortBy($property)
	{
		usort($this->users, function($oneUser,$twoUser) use($property) {
			return $oneUser->$property() <=> $twoUser->$property();
		});
	}
}


$collection = new UserCollection([
	new User('Janie', 25),
	new User('John', 15),
	new User('Arny', 50)
]);

$collection->sortBy('name');

var_dump($collection->users);