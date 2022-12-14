<?php

class Model
{
    public function __construct(public readonly string $name)
    {
    }

    public function doStuff(): string
    {
        return 'Doing more stuff in info account';
    }

    public function rebasingDemo(): void
    {
        echo 'Rebasing';
    }
}