<?php

require 'src/helpers.php';

require 'src/Unit.php';
require 'src/Soldier.php';
require 'src/Archer.php';
require 'src/Armor.php';

require 'src/BronzeArmor.php';
require 'src/SilverArmor.php';

// Armor
$bronzearmor = new BronzeArmor;
$silverarmor = new SilverArmor;

$robin = new Archer('Robin Hood');
$robin->setArmor($silverarmor);

$atila = new Soldier('Atila el Huno');
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);
