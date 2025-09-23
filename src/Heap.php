<?php

namespace App;

use DateTimeImmutable;
use \SplMaxHeap;

class Heap
{
    private SplMaxHeap $numbersByDesc;

    public function __construct(int $number)
    {
        $this->numbersByDesc = new SplMaxHeap();
        $this->numbersByDesc->insert($number);
    }

    public function insert(int $number): void
    {
        $this->numbersByDesc->insert($number);
    }

    public function getNumbersByDesc(): SplMaxHeap
    {
        return clone $this->numbersByDesc;
    }

}