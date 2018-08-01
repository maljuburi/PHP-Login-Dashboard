<?php

include_once "./php/config.php";

$conn = mysqli_connect($db_server, $db_uname, $db_pw, $db_dbname);
// Check connection


if (!$conn) {
    //if no connection
    $error="Connection failed: " . mysqli_connect_error();
}

?>