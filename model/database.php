<?php
    $dsn = 'mysql:host=localhost;dbname=ge3-test';
    $username = 'root';


    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = 'Σφάλμα στη Βάση Δεδομένων: ';
        $error_message .= $e->getMessage();
        include('view/error.php');
        exit();
    }