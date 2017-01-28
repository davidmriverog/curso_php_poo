<?php

namespace MyCommunity;

use MyCommunity\Utils\Logger;

class Log
{
    protected static $logger;

    public static function info($message)
    {
        static::$logger->info($message);
    }

    public static function setLogger(Logger $logger)
    {
        static::$logger = $logger;
    }
}