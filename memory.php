<?php

//$array = [];
//$splFixedArray = new SplFixedArray(32769);
$splDoublyLinkedList = new SplDoublyLinkedList();

// $array de 32768 itens usou 0.8, já de 32769 itens usou 1.3 porque o PHP reserva espaço que seja potência de 2
for ($i = 0; $i < 32769; $i++) {
    //$array[$i] = $i; // 1.3
    // $splFixedArray->offsetSet($i, $i); // 0.8
    $splDoublyLinkedList->push($i); // 1.3
}

// memory_get_usage é o número de bits que o PHP usou de memória
var_dump(memory_get_usage() / 1024 / 1024);
