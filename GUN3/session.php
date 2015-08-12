<?php
session_start();
$_SESSION["x"]=1;
$_SESSION["y"]=2;
//setcookie("x","aaa","./");

echo $_SESSION["x"];

?>
