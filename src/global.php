<?php
session_start();
if(defined('DEBUG_SIMPLE_INSTALLER')){
    ini_set('display_errors', true);
    error_reporting(E_ALL);
}
function spi_autoload($className){
    if(!file_exists(dirname(__FILE__).'/'.$className.'.class.php')) return false;
    require_once dirname(__FILE__).'/'.$className.'.class.php';
    return true;
}
spl_autoload_register("spi_autoload");