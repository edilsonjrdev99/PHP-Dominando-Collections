<?php

require __DIR__ . '/vendor/autoload.php';

use Ds\Vector;

$vector = new Vector([1, 2, 3]);
$vector->push(4);

print_r($vector);
