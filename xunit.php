<?php

declare(strict_types=1);

@ini_set('zend.assertions', '1');
if (ini_get('zend.assertions') != '1') {
    throw new \UnexpectedValueException(
        'zend.assertions must be completely only 1 in php.ini'
    );
}

use Tests\OstrikovG\PhpKentBecksXUnit\TestCaseTest;

require __DIR__ . '/vendor/autoload.php';

print_r((new TestCaseTest("testTemplateMethod"))->run()->summary() . "\r\n");
print_r((new TestCaseTest("testResult"))->run()->summary() . "\r\n");
