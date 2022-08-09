<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

class WasRun extends TestCase
{
    public string $log;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function setUp(): void
    {
        $this->log = "setUp ";
    }

    public function testMethod(): void
    {
        $this->log .= "testMethod ";
        $this->tearDown();
        $this->log .= "tearDown ";
    }
}