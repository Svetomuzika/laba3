<?php

require 'vendor/autoload.php';

require_once "magicclass.php";

$a = new MagicClass();
function SayHi(){
    return "Hi";
}
$a -> SayHi();





