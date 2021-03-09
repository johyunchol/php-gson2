<?php
/**
 * PHPGson2 Library
 * Simple entity mapper for PHP applications
 * with minimum requirements and dependencies
 *
 * @author Rafal Martinez-Marjanski
 * @package PHPGson2
 * @license MIT
 */

include_once __DIR__ . '/../../src/autoload.php';

interface TestInterface
{
    function runTest();

    function isEnabled();

    function getTitle();
}