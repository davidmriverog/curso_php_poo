<?php

namespace MyCommunity;

require '../src/helpers.php';
require '../vendor/autoload.php';

// Armor
$bronzearmor = new BronzeArmor();
$silverarmor = new SilverArmor();

$robin = new Archer('Robin Hood');
$robin->setArmor($silverarmor);

$atila = new Soldier('Atila el Huno');
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);
