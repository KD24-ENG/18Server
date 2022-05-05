<?php
    /** Data source name */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bkkdb";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /**echo "SUCCESS"; */
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }
?>