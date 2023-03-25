<?php
// Start the session
session_start();
require_once "conn.php";

// Check if the user is logged in and has admin privileges
if (isset($_SESSION['user_id']) == 3) {

  // Fetch the user activity data where logout_time is not NULL
  $sql = "SELECT user_id, login_time, logout_time FROM user_activity WHERE logout_time IS NOT NULL";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  // Display the data in a table or list format
  ?>
  <h1>Admin Dashboard</h1>
  <table>
    <thead>
      <tr>
        <th>User ID</th>
        <th>Login Time</th>
        <th>Logout Time</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
          <td><?= $row['user_id'] ?></td>
          <td><?= $row['login_time'] ?></td>
          <td><?= $row['logout_time'] ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <?php
} else {
  // If the user is not logged in or does not have admin privileges, redirect them to the login page
  header("Location: form.php");
  exit;
}
?>
