<?php
############################################
### 1. Convertir file_input a file_mauro ###
############################################

// $file_input = fopen('file_input.txt','r');
$file_input = file('file_input.txt');
$file_output = fopen('file_output.txt','w');

// while(!feof($file_input))
foreach ($file_input as $row) {
//    $row = fgets($file_input);
   fwrite($file_output,clean_row($row));
}
fclose($file_output);

function clean_row($row)
{
    $row = str_replace(" ","", $row);
    $pos_borrar = strpos($row,"Borrar");
    $new_row = substr($row,0,$pos_borrar);
    return $new_row . PHP_EOL;
}
