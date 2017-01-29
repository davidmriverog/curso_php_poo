<?php

namespace MyCommunity;

class User
{
    protected $attributes = [];

    public function __construct(array $attributes=[])
    {
        $this->fill($attributes);
    }

    public function getAttribute($name)
    {
        if(array_key_exists($name,$this->attributes)){
            return $this->attributes[$name];
        }
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttribute($name,$value)
    {
        $this->attributes[$name] = $value;
    }

    public function fill(array $attributes=[])
    {
        $this->attributes = $attributes;
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __set($name,$value)
    {
        return $this->setAttribute($name,$value);
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
}