<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Movie;

$movie1 = new Movie('Vingadores', 'Ação');
$movie2 = new Movie('O espetacular homem aranha', 'Ação');

// Criando um exemplo de mapa de objetos
$allMovies = [
    spl_object_hash($movie1) => new DateTimeImmutable('2025-09-17'),
    spl_object_hash($movie2) => new DateTimeImmutable('2025-09-17'),
];

echo $allMovies[spl_object_hash($movie1)]->format('d/m/Y'); echo PHP_EOL;

foreach ($allMovies as $movie) {
    echo $movie->format('d/m/Y') . PHP_EOL;
}
