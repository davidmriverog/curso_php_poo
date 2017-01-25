<?php

namespace MyCommunity;

class HtmlLogger
{
    public static function info($message)
    {
        echo "<p> {$message} </p>";
    }
}