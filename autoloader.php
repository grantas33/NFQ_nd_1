<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.15
 * Time: 15.38
 */

function autoload($className)
{
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className.'.php');
    if (file_exists($file)){
         require $file;
    }
}
spl_autoload_register('autoload');
