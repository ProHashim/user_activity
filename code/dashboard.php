<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: form.php");
  exit;
}

// The user is logged in, so display the dashboard
echo "Welcome to the dashboard!";
?>

<span>
    <a href="logout.php">Logout</a>
</span>

</body>
</html>