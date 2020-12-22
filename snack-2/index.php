<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

/* var_dump(strlen($name)> 3);
var_dump(stripos($mail,"@")>0);
var_dump(stripos($mail,".")>0);
var_dump(is_nan($age) == false); */

if(strlen($name)> 3 && strpos($mail,"@")> 0 && strpos($mail,".")> 0 && is_numeric($age) )  {
    echo "Accesso riuscito!";
} else {
    echo "Accesso negato!!!";
}
?>