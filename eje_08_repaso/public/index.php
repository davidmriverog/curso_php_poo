<?php

namespace MyCommunity;

require '../vendor/autoload.php';

// Armor
$bronzearmor = new Armors\BronzeArmor;
$silverarmor = new Armors\SilverArmor;

$robin = new Archer('Robin Hood',30);
$robin->setArmor($silverarmor);

$atila = new Soldier('Atila el Huno',30);
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);
