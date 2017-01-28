<?php

namespace MyCommunity\Utils;

class HtmlLogger implements Logger
{
    public function info($message)
    {
        echo "<p> {$message} </p>";
    }
}