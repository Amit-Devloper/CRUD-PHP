<?php

    require("./config.php");

    // Create connection
    $conn = new mysqli(SERVERNAME, USERNAME, PASSCODE);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

?>