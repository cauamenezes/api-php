<?php

    $serverName = 'localhost';
    $userName = 'root';
    $password = 'bcd127';
    $database = 'cadastro';

    $conn = new mysqli($serverName, $userName, $password, $database);   

    if($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }

    // echo '<pre>';
    // var_dump($conn);
    // echo '</pre>';

    return $conn;

?>