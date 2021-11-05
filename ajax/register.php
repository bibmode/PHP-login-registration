<?php

//allow the config
define('__CONFIG__', true);
//require the config
require_once "../inc/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //always return json format
  header('Content-Type: application/json');


  $return = [];

  // make sure the user does not exist

  //make sure the user can be added and is actually added

  //return the proper info back to javascript to redirect us
  echo json_encode($return, JSON_PRETTY_PRINT);
  exit;
} else {
  exit('test');
}
