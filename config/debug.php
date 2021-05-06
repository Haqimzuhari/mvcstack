<?php

function dd($value)
{
   echo "<pre>";

   var_dump($value);

   echo "</pre>";

   die;
}

function dump($value)
{
   echo "<pre>";

   var_dump($value);
   
   echo "</pre>";
}