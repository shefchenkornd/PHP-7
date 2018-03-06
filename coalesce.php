<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 06.03.18
 * Time: 15:26
 */

$_GET['name'] = 'dfdfd';

//$name = $_GET['name'] ? $_GET['name'] : 'nothing';
$name = $_GET['name'] ?? 'nothing';

var_dump($name);