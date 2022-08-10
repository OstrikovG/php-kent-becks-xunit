<?php

declare(strict_types=1);

namespace Tests\OstrikovG\PhpKentBecksXUnit;

use OstrikovG\PhpKentBecksXUnit\TestCase;
use OstrikovG\PhpKentBecksXUnit\WasRun;

class TestCaseTest extends TestCase
{
    public function testTemplateMethod(): void
    {
        $test = new WasRun("testMethod");
        $test->run();
        \assert("setUp testMethod tearDown " == $test->log);
    }

    public function testResult(): void
    {
        $test = new WasRun("testMethod");
        $result = $test->run();
        \assert("1 run, 0 failed" == $result->summary());
    }

    public function testFailedResult(): void
    {
        $test = new WasRun("testBrokenMethod");
        $result = $test->run();
        \assert("1 run, 1 failed" == $result->summary());
    }
}