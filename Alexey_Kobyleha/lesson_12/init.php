<?php
spl_autoload_register(function($class) {
    $classPath = './classes/';
    $classPath .= $class. '.php';

    if (file_exists($classPath)) {
        include_once ($classPath);
    } else {

    }
});