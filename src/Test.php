<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksXUnit;

interface Test
{
    public function run(TestResult $result): TestResult;
}
