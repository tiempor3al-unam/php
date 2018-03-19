<?php

$datos = [
["nombre" => "juan","cuenta" => "0001"], 
["nombre" => "pedro", "cuenta" => "0002"]
];

header("Content-type: text/xml");
echo "<?xml version=\"1.0\"?>";
echo "<registros>";

foreach($datos as $arreglo){
	echo "<alumno>";
	foreach($arreglo as $key => $value){
		echo "<$key>$value</$key>";
	}
	echo "</alumno>";
	
}

echo "</registros>";

