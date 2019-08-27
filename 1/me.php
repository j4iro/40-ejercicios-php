<?php
############################################
### 1. Convertir file_input a file_mauro ###
############################################

$file_input = file('file_input.txt');
$file_output = fopen('file_output.txt','w');

foreach ($file_input as $row) {
   fwrite($file_output,clean_row($row));
}
fclose($file_output);

function clean_row($row)
{
    $row = str_replace("| ","|", $row);
    $pos_borrar = strpos($row,"Borrar");
    // $new_row = substr($row,0,$pos_borrar);
    $new_row = ( $pos_borrar ? substr($row,0,$pos_borrar). PHP_EOL : $row );
    return $new_row;
}
