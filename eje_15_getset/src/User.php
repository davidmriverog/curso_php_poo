<?php

namespace MyCommunity;

class User
{
    protected $attributes = [];

    public function __construct(array $attributes=[])
    {
        $this->attributes = $attributes;
    }

    public function __get($name)
    {
        return "[$name]";
    }
}