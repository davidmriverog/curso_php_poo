<?php

namespace MyCommunity;

class User
{
    public function __construct(array $attributes=[])
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }
    }
}