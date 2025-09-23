<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Heap;

$numbers = new Heap(1);
$numbers->insert(4);
$numbers->insert(3);
$numbers->insert(7);
$numbers->insert(5);

// Retorna ordem aleatória
print_r($numbers->getNumbersByDesc());

// Retornar do maior para o menor
foreach ($numbers->getNumbersByDesc() as $number) {
    echo $number . PHP_EOL;
}
