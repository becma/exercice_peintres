<?php
    function ouvreConnexion() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "root";
        $db = "peintres2_db";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
        
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
?>