<?php
require '../src/BracketsValidator.php';

use \Anstag\BracketsValidator\BracketsValidator;

$validator = new BracketsValidator();

$string = '( 25 + 6) * ((144 - 1) / 6';
$string2 = '(
12+4
)';

var_dump($validator->isValid($string));
var_dump($validator->isValid($string2));
