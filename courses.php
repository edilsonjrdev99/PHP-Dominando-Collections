<?php

$courses = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Coleções com PHP',
];

$newCourses = [
    'Orientação a objetos',
    'PDO com PHP'
];

// Métodos de fazer um push de pilha
$courses[] = 'Arrays em PHP';
array_push($courses, 'Orientação a objetos', 'PDO com PHP');

// Método de unir arrays
$allCourses = array_merge($courses, $newCourses);

// Removendo o primeiro item do array igual fila
$intro = array_shift($allCourses);

// Método para fazer um pop de pilha
$coursePDO = array_pop($allCourses);

array_unshift($allCourses, 'Curso para iniciante em PHP');

var_dump($courses, $allCourses, $intro, $coursePDO);