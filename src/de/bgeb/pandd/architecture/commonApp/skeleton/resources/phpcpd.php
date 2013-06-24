#!/usr/bin/php
<?php

// Set include path
set_include_path(dirname(__FILE__).'/../lib/');

require 'SebastianBergmann/PHPCPD/autoload.php';

$command = new SebastianBergmann\PHPCPD\TextUI\Command();
$command->main();