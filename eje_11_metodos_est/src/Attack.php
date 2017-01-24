<?php

namespace MyCommunity;

class Attack
{
    protected $damage;

    protected $type;

    protected $description;

    public function __construct($damage,$type,$description)
    {
        $this->damage = $damage;
        $this->type = $type;
        $this->description = $description;
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

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return Translator::get($this->description,[
            'unit'=> $attacker->getName(),
            'opponent'=>$opponent->getName()
        ]);
    }
}