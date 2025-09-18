<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Student;
use \App\People;

$people = new People('Luiz');

$students = new Student(new People('João'));

$students->addStudent(new People('Maria'));
$students->addStudent(new People('João'));
$students->addStudent($people);
$students->addStudent($people);

// SplObjectStorage não permite elementos repetidos
// João como string 2x são referências diferentes, mas Luiz 2x é a mesma e ele acabou não sendo duplicado
// Por de baixo dos panos usa spl_object_hash para comparar o objeto pela hash e ver se é igual ou não
foreach ($students->getStudents() as $student) {
    print_r($student->name); echo PHP_EOL;
}
