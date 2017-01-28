<?php

namespace MyCommunity;

class HtmlLogger
{
    public function info($message)
    {
        echo "<p> {$message} </p>";
    }
}