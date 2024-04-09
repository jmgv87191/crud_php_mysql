<?php

    $servidor= '162.241.203.240';
    $db = 'juangtzc_phpcrud';
    $username = 'juangtzc_jmgv8719';
    $password = 'Jmsa424b';

    try {
        
        $conexion = new PDO("mysql:host=$servidor;dbname=$db",$username,$password);

    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>