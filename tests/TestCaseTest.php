<?php

declare(strict_types=1);

namespace Tests\OstrikovG\PhpKentBecksXUnit;

use OstrikovG\PhpKentBecksXUnit\TestCase;
use OstrikovG\PhpKentBecksXUnit\WasRun;

class TestCaseTest extends TestCase
{
    public function testRunning(): void
    {
        $test = new WasRun("testMethod");
        assert(!$test->wasRun);
        $test->run();
        assert($test->wasRun);
    }
}