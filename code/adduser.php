<?php
require_once "conn.php";


// Prepare the SQL statement
$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $pdo->prepare($sql);

// Bind the values to variables
$username = 'john';
$password = password_hash('secret', PASSWORD_DEFAULT);

// Bind the variables to the placeholders in the statement
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

// Execute the statement to insert the new user into the database
$stmt->execute();

echo 'User added successfully.';
?>
