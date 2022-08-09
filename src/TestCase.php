<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

class TestCase
{
    private string $name;

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
        $this->{$this->name}();
        $this->tearDown();
    }

    protected function tearDown(): void
    {
    }
}