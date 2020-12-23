<?php

require 'vendor/autoload.php';

require 'src/Magic.php';

$a = new MagicClass();
function SayHi(){
    return "Hi";
}
$a -> SayHi();

