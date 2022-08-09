<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

class TestCase
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        $method = $this->name;
        $this->$method();
    }
}