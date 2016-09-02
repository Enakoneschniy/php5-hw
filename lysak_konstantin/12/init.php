<?php
ini_set('display_errors', 1);

spl_autoload_register(function ($class){
    $class_path = './classes/';//  ./classes/
    $class_path .= $class.'.php';// ./classes/Animal.php

    if(file_exists($class_path)){
        include_once $class_path;
    }else{

    }
});