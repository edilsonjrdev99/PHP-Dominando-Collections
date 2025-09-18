<?php

require_once 'vendor/autoload.php';

use App\Queue;

$queue = new Queue('Ana');
$queue->enqueue('Paula');
$queue->enqueue('Maria');
$queue->enqueue('Luis');

$queue->dequeue();

foreach ($queue->getQueue() as $people) {
    echo $people . PHP_EOL;
}
