<?php
namespace App;

class MagicClass {
    public function __construct() {
        echo "__construct()";
    }

    public function __destruct(){
        echo "__destruct()";
    }

    public function __call() {
        echo "__call()";
    }

    public static function __callStatic() {
        echo "__callStatic()";
    }

    public function __set() {
        echo "__set()";
    }

    public function __get() {
        echo "__get()";
    }

    public function __isset() {
        echo "__isset()";
    }

    public function __unset() {
        echo "__unset()";
    }

    public function __sleep() {
        echo "__sleep()";
    }

    public function __wakeup() {
        echo "__wakeup()";
    }
}