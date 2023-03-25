<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post" action="login.php">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username">

  <label for="password">Password:</label>
  <input type="password" name="password" id="password">

  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>

  <input type="submit" value="Login">
</form>


</body>
</html>