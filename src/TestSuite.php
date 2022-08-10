<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

class TestSuite implements Test
{
    private array $tests;

    public function __construct()
    {
        $this->tests = [];
    }

    public function add(TestCase $test): void
    {
        $this->tests[] = $test;
    }

    public function run(TestResult $result): TestResult
    {
        /** @var TestCase $test */
        foreach ($this->tests as $test) {
            $test->run($result);
        }
        return $result;
    }
}