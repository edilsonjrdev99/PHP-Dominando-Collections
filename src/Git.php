<?php

namespace App;

use SplStack;

class Git
{
    private SplStack $commits;

    public function __construct(string $commitName)
    {
        $this->commits = new SplStack();
        $this->addCommit($commitName);
    }

    public function addCommit(string $commitName): void
    {
        $this->commits->push($commitName);
    }

    public function resetLastCommit(): void
    {
        $this->commits->pop();
    }

    public function getCommits(): array
    {
        $commits = [];

        foreach ($this->commits as $commit) {
            $commits[] = $commit;
        }

        return $commits;
    }
}