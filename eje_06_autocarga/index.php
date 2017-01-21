<?php

require 'src/helpers.php';


spl_autoload_register(function($className){
    require "src/$className.php";
}); 

// Armor
$bronzearmor = new BronzeArmor;
$silverarmor = new SilverArmor;

$robin = new Archer('Robin Hood');
$robin->setArmor($silverarmor);

$atila = new Soldier('Atila el Huno');
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);
