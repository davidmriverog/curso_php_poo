<?php

namespace MyCommunity;

require '../vendor/autoload.php';

$user = new User([
    'first_name'=>'David',
    'last_name'=>'Rivero'
]);

echo "Sr. {$user->first_name} - {$user->last_name}";