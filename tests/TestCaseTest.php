<?php

declare(strict_types=1);

namespace Tests\OstrikovG\PhpKentBecksXUnit;

use OstrikovG\PhpKentBecksXUnit\TestCase;
use OstrikovG\PhpKentBecksXUnit\WasRun;

class TestCaseTest extends TestCase
{
    private WasRun $test;

    protected function setUp(): void
    {
        $this->test = new WasRun("testMethod");
    }

    public function testRunning(): void
    {
        $this->test->run();
        assert($this->test->wasRun);
    }

    public function testSetUp(): void
    {
        $this->test->run();
        assert($this->test->wasSetUp);
    }
}