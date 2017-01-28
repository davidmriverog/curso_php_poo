<?php

namespace MyCommunity;

class Log
{

    protected static $logger;

    public static function info($message)
    {
        static::$logger->info($message);
    }

    public static function setLogger($logger)
    {
        static::$logger = $logger;
    }
}