<?php

require_once 'vendor/autoload.php';

use App\Git;

$commits = new Git('Primeiro commit');
$commits->addCommit('Segundo commit');
$commits->addCommit('Terceiro commit');
$commits->addCommit('Commit errado');

$commits->resetLastCommit();

var_dump($commits->getCommits());
