<?php

namespace App;

use SplQueue;

class Queue
{
    private SplQueue $list;

    public function __construct(string $people)
    {
        $this->list = new SplQueue();
        $this->list->enqueue($people);
    }

    public function enqueue(string $people): void
    {
        $this->list->enqueue($people);
    }

    public function dequeue(): void
    {
        $this->list->dequeue();
    }

    public function getQueue(): SplQueue
    {
        return $this->list;
    }
}