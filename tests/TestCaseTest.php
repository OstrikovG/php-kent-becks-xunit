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
        assert("setUp testMethod tearDown " == $test->log);
    }
}