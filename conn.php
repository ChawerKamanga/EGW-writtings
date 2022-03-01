<?php
/**
 * Have one file where you will be doing all the connection
 * then include this file on any php page that needs database
 * connection
 */
$servername = "127.0.0.1";
$username = "chawer";
$password = "H3llo@Database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=MUST", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
