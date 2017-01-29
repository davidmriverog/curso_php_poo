<?php

namespace MyCommunity;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
    'first_name'=>'David',
    'last_name'=>'Rivero',
    'age'=>26
]);

$user->nickname = 'drivero';


echo "Sr. {$user->first_name} - {$user->last_name}";


if(isset($user->nickname)){
    echo "<p> su username es: {$user->nickname} </p>";
}