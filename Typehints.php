<?php

// чтобы вызвать этот скрипт через консоль используем в консоли такую команду
// _>php ex.php 33

declare(strict_types=1); // включаем строгую типизацию

$var = $argv[1];

function setAge(int $age)
{
	var_dump($age);
}

// setAge($var);

function isVal(bool $bool)
{
	var_dump($bool);
}

isVal($var);