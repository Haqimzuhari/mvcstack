<?php

SESSION_START();


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));


include('env.php');
include('config/apps.php');


require_once('config/debug.php');
require_once('config/functions.php');
require_once('config/helpers.php');


spl_autoload_register(function ($class) {
   $cores = ROOT.DS."core".DS.$class.".php";
   if(file_exists($cores)) {
      require_once($cores);
   }
});


spl_autoload_register(function ($class) {
   $models = ROOT.DS."app".DS."models".DS.$class.".php";
   if(file_exists($models)) {
      require_once($models);
   }
});

$init = new Application();