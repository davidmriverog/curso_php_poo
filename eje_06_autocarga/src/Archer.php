<?php

class Archer extends Unit
{
    /**
     * Damage Solder
     * 
     * @var integer
     */
    protected $damage = 20;

    protected $armor;

    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} Dispara una flecha al oponente {$opponent->getName()} </p>";

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
