<?php
require("ivirzivir.php");
echo "<pre>";
var_dump($_POST);

foreach ($_POST['hobi'] as $key=>$hobi)
    echo $hobiler[$key];