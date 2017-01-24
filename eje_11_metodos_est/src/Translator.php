<?php

namespace MyCommunity;

class Translator
{
    protected static $messages = [];

    public static function get($key,array $params=array())
    {
        if (!$this->has($key)) {
            return "[$key]";
        }

        return $this->replaceParams(static::$messages[$key],$params);
    }

    public static function has($key)
    {
        return isset(static::$messages[$key]);
    }

    public static function replaceParams($message, array $params)
    {
 
        foreach ($params as $key => $value) {
            $message = str_replace(":$key",$value, $message);
        }

        return $message;
    }
}