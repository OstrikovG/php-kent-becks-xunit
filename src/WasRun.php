<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

class WasRun extends TestCase
{
    public bool $wasRun;

    public function __construct(string $name)
    {
        $this->wasRun = false;
        parent::__construct($name);
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}