<?php
namespace application\lib;
class Debug {

	function __construct() {
        ini_set('display_errors',1);
        error_reporting(E_ALL);
	}
	function __destruct() {
        ini_set('display_errors',0);
        error_reporting(0);
	}
    public static function print($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}