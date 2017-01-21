<?php

class Soldier extends Unit
{
    /**
     * Damage Solder
     * 
     * @var integer
     */
    protected $damage = 30;

    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a con la espada a el oponente {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    protected function absorbDamage($damage)
    {
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
