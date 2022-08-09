<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

class WasRun extends TestCase
{
    public bool $wasRun;
    public bool $wasSetUp;

    public function __construct(string $name)
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
        parent::__construct($name);
    }

    protected function setUp(): void
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}