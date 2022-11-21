<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'F3lip3lou', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}