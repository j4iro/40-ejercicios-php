<?php
/*
####### TWO ####### 
Escribir un programa PHP que genere dos fechas al azar y emita:
1. Qué fecha es posterior a cuál
2. Cuántos días hay entre una y otra 
*/

$fecha_random_1 = date('Y-m-d',rand());
$fecha_random_2 = date('Y-m-d',rand());

print "F1:". $fecha_random_1 . PHP_EOL;
print "F2:". $fecha_random_2 . PHP_EOL;

$fecha_mayor = ($fecha_random_1>$fecha_random_2) ? $fecha_random_1 : $fecha_random_2;
print "FEC MAYOR: " . $fecha_mayor . PHP_EOL;

$interval = date_diff(date_create($fecha_random_1), date_create($fecha_random_2));
print $interval->format('%R%a days') . PHP_EOL;
