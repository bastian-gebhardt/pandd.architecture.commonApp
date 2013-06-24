#!/usr/bin/php
<?php

define('__LIB_PATH__', __DIR__.'/../lib/');

require_once __LIB_PATH__.'ezc/Base/base.php';

use SebastianBergmann\PHPLOC\TextUI\Command;

$command = new Command();
$command->main();

function __autoload($className) {
    $filename = __LIB_PATH__.str_replace('\\', '/', ltrim($className, '\\')).'.php';
    if(file_exists($filename) === true) {
        require_once $filename;
    }
    else {
        ezcBase::autoload($className);
    }
}