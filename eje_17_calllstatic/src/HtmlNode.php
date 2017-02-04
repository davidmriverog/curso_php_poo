<?php

namespace MyCommunity;

class HtmlNode
{
    protected $tag;

    protected $attributes = [];

    public function __construct($tag,$attributes)
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
    }

    public function render()
    {
        return "<$this->tag {}>";
    }

    protected function renderAttribute()
    {
        $result = "";

        foreach ($this->attributes as $key => $value) {
            $result .= sprintf('%s="%s"',$key,$value);
        }

        return $result;
    }
}