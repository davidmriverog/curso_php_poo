<?php

namespace MyCommunity;

class Soldier extends Unit
{
    
    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a con la espada a el oponente {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }

}
