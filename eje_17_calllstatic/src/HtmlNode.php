<?php

namespace MyCommunity;

class HtmlNode
{
    protected $tag;

    protected $content;

    protected $attributes = [];

    public function __construct($tag,$content,$attributes)
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function render()
    {
        return "<{$this->tag} {$this->renderAttribute()}>";
    }

    protected function renderAttribute()
    {
        $result = "";

        foreach ($this->attributes as $key => $value) {
            $result .= sprintf(' %s="%s"',$key,$value);
        }

        return $result;
    }
}