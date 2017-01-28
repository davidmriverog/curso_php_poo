<?php

namespace MyCommunity;

use MyCommunity\Weapons\BasicBow;
use MyCommunity\Weapons\BasicSword;
use MyCommunity\Weapons\FireBow;
use MyCommunity\Utils\HtmlLogger;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack'=>':unit dispara una flecha a :opponent',
    'BasicSwordAttack'=>':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha potente a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de  fuego  a :opponent'
]);

$bronzearmor = new Armors\BronzeArmor;
$silverarmor = new Armors\SilverArmor;

Log::setLogger(new HtmlLogger());

$robin = new Unit('Robin Hood',new FireBow);
$robin->setArmor($silverarmor);

$atila = Unit::createSoldier()
    ->setArmor($bronzearmor)
    ->setWeapon(new BasicSword)
    ->setShield();

$robin->attack($atila);
$atila->attack($robin);

