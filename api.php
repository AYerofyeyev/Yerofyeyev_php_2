<?php
// Allow answer to any domain
header('Access-Control-Allow-Origin: *');

if (version_compare(phpversion(), '5.3.0', '>=')  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);

include ("config.php");
include ("connect.php");

$name = $_REQUEST["name"];



echo $name;
?>
