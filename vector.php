<?php

require __DIR__ . "/vendor/autoload.php";

use \App\VectorClass;

echo 'Exemplo de vetor' . PHP_EOL;

$array = new VectorClass();
$array->allocate(32769);

for ($i = 0; $i < 32769; $i++) {
    $array->push($i);
}

var_dump(memory_get_usage() / 1024 / 1024);