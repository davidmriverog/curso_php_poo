<?php

namespace MyCommunity;

require '../vendor/autoload.php';


class OneClass
{

    /**
     * Esta metodo dispara un evento dentro de una instanciacion de la clase
     * 
     * @param  string $method 
     * @param  array  $args  
     * @return mixed
     */
    public function __call($method,array $args)
    {
        var_dump($method,$args);
    }

    /**
     * Esta metodo dispara un llamado al metodo estatico fuera de una instancia.
     * 
     * @param  string $method 
     * @param  array  $args  
     * @return mixed
     */
    public static function __callStatic($method,array $args)
    {
        var_dump($method,$args);
    }
}


$oneClass = new OneClass;

// $oneClass->oneFunction('Hello GoodBye','The Beatles');

OneClass::yellowSubmarine('Misery','No Reply');