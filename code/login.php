<?php
session_start();
require_once "conn.php";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  // Prepare the SQL query
  $sql = "SELECT * FROM users WHERE username = ?";
  $stmt = $pdo->prepare($sql);

  // Bind the username parameter and execute the query
  $stmt->execute([$username]);

  // Fetch the user record from the database
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  // Verify the password
  if ($user && password_verify($password, $user['password'])) {
    // Password is correct, log the user in
    $_SESSION['user_id'] = $user['id'];

    // Record the login time in the user_activity table
    $current_time = date('Y-m-d H:i:s');
    $sql = "INSERT INTO user_activity (user_id, login_time) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user['id'], $current_time]);
    // Redirect the user to the dashboard or homepage
    header("Location: dashboard.php");
    exit;
  } else {
    // Password is incorrect, show an error message
    $error = "Invalid username or password.";
    echo $error;

  }
}
?>