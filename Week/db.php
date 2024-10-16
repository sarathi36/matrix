<?php

$servername = "localhost";
$username = 'root';
$password = 'root123';
$database = 'matrix';


$connection = mysqli_connect($servername,$username,$password,$database);
    if (!$connection) {
        echo "Not Connected";
    }



?>