<?php
$servername = "localhost";
$username = "340041";
$password = "1!Qqwerty";
$db = '340041';

try {
    $connection = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    var_dump($e);
    die("Connection failed");
}
