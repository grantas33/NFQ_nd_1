<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.15
 * Time: 15.38
 */


function autoload($className)
{
    $CONFIG_FILE = "autoloadConfig.json";
    /*Šis failas atlieka tokią pat funkciją kaip composer.json
    autoload psr-4 objektas -
    "autoload": {
    "psr-4": {

    }
    */
    $maps = json_decode(file_get_contents($CONFIG_FILE));

    foreach($maps as $key => $value){
        if(substr($className, 0, strlen($key)) == $key){
           $className =  $value.substr($className, strlen($key));
        }
}
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className.'.php');
    if (file_exists($file)){
         require $file;
    }
}
spl_autoload_register('autoload');
