#!/usr/bin/env php
<?php

//Framework einbinden
require_once dirname(__FILE__).'/../../pandd.php';

// Autoloader und ROOT Konstanten setzen
Pandd::bootStrap();

define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');
require_once 'PHPUnit/Autoload.php';
PHPUnit_TextUI_Command::main();

?>