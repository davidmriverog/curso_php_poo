<?php

namespace MyCommunity;

class Attack
{
    protected $damage;

    protected $type;

    public function __construct($damage,$type)
    {
        $this->damage = $damage;
        $this->type = $type;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->type;
    }

    public function isPhysical()
    {
        return ! $this->isMagical();
    }
}