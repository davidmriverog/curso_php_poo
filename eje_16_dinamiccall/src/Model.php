<?php

namespace MyCommunity;

use MyCommunity\Utils\Str;

abstract class Model
{
    protected $attributes = [];

    public function __construct(array $attributes=[])
    {
        $this->fill($attributes);
    }

    public function getAttribute($name)
    {
        $value = $this->getAttributeValue($name);

        $method = 'get'.Str::studly($name).'Attribute';

        // exit($method);
        // exit(method_exists($this, $method));
        
        if (method_exists($this, $method)) {
            $this->$method($value);
        }

        return $value;
    }

    public function getAttributeValue($name)
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