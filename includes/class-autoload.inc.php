<?php

spl_autoload_register("autoload");

function autoload($className){

$path = "classes/";
$extension = ".class.php";
$filePath = $path . $className . $extension;

if(!file_exists($filePath)){

return false;

}

include_once $filePath;


}