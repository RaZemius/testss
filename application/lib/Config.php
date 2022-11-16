<?php
namespace application\lib;

class Config {
    public static $appConfig;
    public static $dbConfig;

    static function init(){
        self::$appConfig = parse_ini_file("application/config/config.ini", true)["application"];
        self::$dbConfig = parse_ini_file("application/config/config.ini", true)["database"];
    }
}