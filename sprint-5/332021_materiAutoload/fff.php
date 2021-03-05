<?php

function __autoload($class){
  require_once($class.".php");
}
$bebek = new Bebek;
$kucing = new Kucing;