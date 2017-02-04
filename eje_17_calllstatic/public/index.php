<?php

namespace MyCommunity;

require '../vendor/autoload.php';


$inputform = new HtmlNode('input',[
    'id'=>'firstname',
    'name'=>'firstname',
    'type'=>'text'
]);

echo $inputform->render();