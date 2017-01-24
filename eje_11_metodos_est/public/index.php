<?php

namespace MyCommunity;

// Weapons
use MyCommunity\Weapons\BasicBow;
use MyCommunity\Weapons\BasicSword;
use MyCommunity\Weapons\FireBow;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack'=>':unit dispara una flecha a :opponent',
    'BasicSwordAttack'=>':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha potente a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de  fuego  a :opponent'
]);

// Armor
$bronzearmor = new Armors\BronzeArmor;
$silverarmor = new Armors\SilverArmor;

$robin = new Unit('Robin Hood',new FireBow);
$robin->setArmor($silverarmor);

$atila = new Unit('Atila el Huno',new BasicSword);
$atila->setArmor($bronzearmor);

$robin->attack($atila);
$atila->attack($robin);

