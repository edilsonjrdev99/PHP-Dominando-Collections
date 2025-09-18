<?php

namespace App;

use \SplObjectStorage;

class Student
{
    private SplObjectStorage $student;

    public function __construct(People $student)
    {
        $this->student = new SplObjectStorage();
        $this->addStudent($student);
    }

    public function addStudent(People $student): void
    {
        $this->student->attach($student);
    }

    public function getStudents(): SplObjectStorage
    {
        return clone $this->student;
    }
}