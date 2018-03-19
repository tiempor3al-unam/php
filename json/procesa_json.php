<?php

$datos = file_get_contents("http://localhost/json/index.php");

$arreglo = json_decode($datos,true);

var_dump($arreglo);