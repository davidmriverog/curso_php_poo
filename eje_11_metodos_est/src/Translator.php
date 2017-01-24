<?php

namespace MyCommunity;

class Translator
{
    protected static $messages = [
        'BasicBowAttack'=>':unit dispara una flecha a :opponent',
        'BasicSwordAttack'=>':unit ataca con la espada a :opponent',
        'CrossBowAttack' => ':unit dispara una flecha potente a :opponent',
        'FireBowAttack' => ':unit dispara una flecha de  fuego a :opponent'
    ];

    public static function get($key,array $params=array())
    {
        if (!static::has($key)) {
            return "[$key]";
        }

        return static::replaceParams(static::$messages[$key],$params);
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