<?php

//if there is no constant defined called config, do not load this file
if (!defined('__CONFIG__')) {
  exit('You do not have a config file');
}

//include the db php file
include_once "classes/DB.php";

$con = DB::getConnection();
