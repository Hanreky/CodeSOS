<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdcodesos";

function conectar()
{
    global $servername, $username, $password, $dbname, $conn;
     $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

function desconectar()
{
    global $conn;
    mysqli_close($conn);
}

?>