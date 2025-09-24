<?php

namespace App;

use \Ds\Vector;

class VectorClass
{
    private Vector $array;

    public function __construct()
    {
        $this->array = new Vector();
    }

    public function allocate(int $value)
    {
        $this->array->allocate($value);
    }

    public function push(int $value)
    {
        $this->array->push($value);
    }

    public function insert(int $value)
    {
        $this->array->insert($value);
    }
}