<?php

class Pandd{
	
	public static function bootStrap(){
		
		self::setRootConsts();
		
		self::setIncludePath();
		
		self::addAutoLoader();
		
	}
	
	public static function testBootstrap(){
	
		self::setRootConsts();
	
		self::setIncludePath();
	
		self::addAutoLoader();
	
	}

	private static function setRootConsts(){
		define('PANDD_APP_ROOT',dirname(__FILE__));
		define('PANDD_SRC_ROOT',PANDD_APP_ROOT.'/src');
		define('PANDD_TEST_ROOT',PANDD_APP_ROOT.'/test');
		define('PANDD_CLASS_ROOT',PANDD_APP_ROOT.'/lib');
	}
	
	private static function setIncludePath(){
		set_include_path(
				PANDD_CLASS_ROOT.PATH_SEPARATOR
				.PANDD_SRC_ROOT.PATH_SEPARATOR
				.PANDD_TEST_ROOT.PATH_SEPARATOR
				.get_include_path()
		);
	}
		
	private static function addAutoLoader(){
		spl_autoload_register(array(__CLASS__, 'userAutoLoader'));
	}
	private static function userAutoLoader($className){
		$classfile = str_replace('\\', '/', ltrim($className, '\\'));
		$classfile = str_replace('_', '/', ltrim($classfile, '_')) . '.php';
		$srcfile = PANDD_SRC_ROOT.'/'.$classfile;
		$libfile = PANDD_CLASS_ROOT.'/'.$classfile;
		$testfile = PANDD_TEST_ROOT.'/'.$classfile;
		if(	is_file($srcfile) || is_file($libfile) || is_file($testfile)){
			require_once $classfile;
		}
		// else continue with the next autoloader
	}


}

?>