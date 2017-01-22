<?php

namespace MyCommunity;

// Weapons
use MyCommunity\Weapons\BasicBow;
use MyCommunity\Weapons\BasicSword;
use MyCommunity\Weapons\CrossBow;

require '../vendor/autoload.php';

// Armor
$bronzearmor = new Armors\BronzeArmor;
$silverarmor = new Armors\SilverArmor;

$robin = new Unit('Robin Hood',new CrossBow);
$robin->setArmor($silverarmor);

$atila = new Unit('Atila el Huno',new BasicSword);
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);

