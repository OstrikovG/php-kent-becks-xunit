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

    public function run(): TestResult
    {
        $result = new TestResult();
        $result->testStarted();
        $this->setUp();
        $this->{$this->name}();
        $this->tearDown();
        return $result;
    }

    protected function tearDown(): void
    {
    }
}