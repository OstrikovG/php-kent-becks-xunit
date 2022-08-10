<?php

declare(strict_types=1);

@ini_set('zend.assertions', '1');
if (ini_get('zend.assertions') != '1') {
    throw new \UnexpectedValueException(
        'zend.assertions must be completely only 1 in php.ini'
    );
}

use OstrikovG\PhpKentBecksXUnit\TestResult;
use OstrikovG\PhpKentBecksXUnit\TestSuite;
use Tests\OstrikovG\PhpKentBecksXUnit\TestCaseTest;

require __DIR__ . '/vendor/autoload.php';

$suite = new TestSuite();
$suite->add((new TestCaseTest("testTemplateMethod")));
$suite->add((new TestCaseTest("testResult")));
$suite->add((new TestCaseTest("testFailedResult")));
$suite->add((new TestCaseTest("testFailedResultFormatting")));
$suite->add((new TestCaseTest("testSuite")));
$result = new TestResult();
$suite->run($result);

print_r($result->summary());
