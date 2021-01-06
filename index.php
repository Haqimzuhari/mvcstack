<?php

SESSION_START();

include_once('config.php');

require_once('debug.php');
require_once('functions.php');

spl_autoload_register(function ($class) {

   $cores = ROOT.DS."core".DS.$class.".php";
   
   if(file_exists($cores))
   {
      require_once($cores);
   }
});

spl_autoload_register(function ($class) {

   $models = ROOT.DS."app".DS."models".DS.$class.".php";

   if(file_exists($models))
   {
      require_once($models);
   }
});

$init = new Application();