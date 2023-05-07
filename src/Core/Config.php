<?php

namespace Paw\Core;

use Dotenv\Dotenv;

class Config 
{
    private static $instance = null;

    private function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
        $dotenv->safeLoad();
    }

    private static function getVar($var, $default)
    {
        if(self::$instance === null)
            self::$instance = New Config();

        return $_ENV[$var] ?? $default;
    }

    public static function getLogLevel()
    {
        return self::getVar("LOG_LEVEL", "INFO");
    }

    public static function getLogFile()
    {
        return self::getVar("LOG_FILE", "logs/app.log");
    }
}