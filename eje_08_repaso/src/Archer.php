<?php

namespace MyCommunity;

class Archer extends Unit
{
    
    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} Dispara una flecha al oponente {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }
}
