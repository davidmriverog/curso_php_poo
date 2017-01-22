<?php

namespace MyCommunity;

use MyCommunity\Weapons\BasicBow;
use MyCommunity\Weapons\BasicSword;

require '../vendor/autoload.php';

// Armor
$bronzearmor = new Armors\BronzeArmor;
$silverarmor = new Armors\SilverArmor;

$robin = new Archer('Robin Hood',new BasicBow);
$robin->setArmor($silverarmor);

$atila = new Soldier('Atila el Huno',new BasicSword);
$atila->setArmor($bronzearmor);

$robin->attack($atila);
