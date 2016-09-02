<?php

spl_autoload_register(function ($class) // Автоматическое подключение классов
{
    $class_path = './classes/';
    $class_path .= $class.'.php';
    if(file_exists($class_path))
    {
        include_once $class_path;
    }else{
        exit('error');
    }
});