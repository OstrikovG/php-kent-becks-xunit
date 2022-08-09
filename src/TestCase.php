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

    protected function setUp(): void
    {
    }

    public function run(): void
    {
        $this->setUp();
        $method = $this->name;
        $this->$method();
    }
}