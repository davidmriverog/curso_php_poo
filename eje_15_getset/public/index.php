<?php

namespace MyCommunity;

require '../vendor/autoload.php';

$user = new User([
    'full_name'=>'David Miguel Rivero Guite'
]);

echo "Sr. {$user->full_name}";