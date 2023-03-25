<?php
$host = "localhost";
$dbname = "mydatabase";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the database is connected
    $status = $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);

} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
