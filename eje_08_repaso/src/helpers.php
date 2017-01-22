<?php

if(!function_exists('show')){

    function show($message){
        echo "<p> {$message} </p>";
    }
}

if(!function_exists('showAttach')){

    function showAttach($owner,$target,$customMessage = null){

        if($customMessage){
            echo sprintf("<p> %s {$customMessage} a %s</p>",$owner,$target);
        }else{
            echo sprintf("<p> %s ataca a %s</p>",$owner,$target);
        }
    }
}