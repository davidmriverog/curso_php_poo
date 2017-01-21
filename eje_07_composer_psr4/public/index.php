<?php

namespace MyCommunity;

require '../vendor/autoload.php';

// Armor
$bronzearmor = new Armors\BronzeArmor;
$silverarmor = new Armors\SilverArmor;

$robin = new Archer('Robin Hood');
$robin->setArmor($silverarmor);

$atila = new Soldier('Atila el Huno');
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);
