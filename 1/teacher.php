<?php
$sourceLines = file( $argv[1] ); //file_input.php
$marker = $argv[2]; //BORRAR
 
foreach ( $sourceLines as $line ) {
    $line = str_replace( '| ', '|', $line);
    $pos = stripos( $line, $marker );
    echo ( $pos ? substr( $line, 0, $pos ).PHP_EOL : $line );
}