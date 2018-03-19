<?php

$datos = [
["nombre" => "juan","cuenta" => "0001"], 
["nombre" => "pedro", "cuenta" => "0002"]
];

header("Content-type: application/json");
echo json_encode($datos);
