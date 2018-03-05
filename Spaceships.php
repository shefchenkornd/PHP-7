<?php

/**
$a <=> $b (Космический корабль (spaceship)) in PHP 7
Return 0 if values on either side are equal
Return 1 if value on the left is greater
Return -1 if the value on the right is greater
*/

echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
echo "\n";

$games = [
	'Mass Effects',
	'Zeland',
	'Advance',
	'Fallout',
	'Metal Gear',
	'Super Mario Bros'
];

usort($games, function($a,$b){

	var_dump('a:' . $a . ', b:' . $b);

	return strlen($a) <=> strlen($b);
});

var_dump($games);