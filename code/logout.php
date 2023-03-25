<?php
session_start();
// Include the database connection code
require_once 'conn.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect to the login page
  header("Location: login.php");
  exit;
}

// Record the logout time in the user_activity table
$current_time = date('Y-m-d H:i:s');
$sql = "UPDATE user_activity SET logout_time = ? WHERE user_id = ? AND logout_time IS NULL";
$stmt = $pdo->prepare($sql);
$stmt->execute([$current_time, $_SESSION['user_id']]);

// Unset the user ID and destroy the session
unset($_SESSION['user_id']);
session_destroy();

// Redirect to the login page
header("Location: form.php");
exit;
?>
