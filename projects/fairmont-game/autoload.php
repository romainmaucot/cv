<?php

//  Autoloader for ReCaptcha\Foo classes. This should be required() by the user before attempting to instantiate any of ReCaptcha classes.

spl_autoload_register(function ($class){
    if(substr($class, 0, 10) !== 'ReCaptcha\\'){
        return;
    }

    $class = str_replace('\\', '/', $class);
    $path = dirname(__FILE__).'/'.$class.'.php';

    if(is_readable($path)){
        require_once $path;
        return;
    }

    $path = dirname(__FILE__).'/../tests/'.$class.'.php';
    if(is_readable($path)){
        require_once $path;
    }
});