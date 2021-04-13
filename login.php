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
  if (isset($_GET['s'])) {
    if ($_GET['s'] == 1) {
      echo '<span style="position:fixed;padding:1rem;background:red;border-radius:1rem;color:white;right:5px;bottom:15px">PASSWORD IS INCORRECT</span>';
    }else if ($_GET['s'] == 2) {
      echo '<span style="position:fixed;padding:1rem;background:red;border-radius:1rem;color:white;right:5px;bottom:15px">USER DOES NOT EXIST</span>';
    }else if ($_GET['s'] == 3) {
      echo '<span style="position:fixed;padding:1rem;background:limegreen;border-radius:1rem;color:white;right:5px;bottom:15px">USER REGISTERED</span>';
    }else if ($_GET['s'] == 4) {
      echo '<span style="position:fixed;padding:1rem;background:limegreen;border-radius:1rem;color:white;right:5px;bottom:15px">RESET PASSWORD SUCCESSFUL</span>';
    }
  }
?>
   
<h2>Login with your registered username and password</h2>
<form action="./auth/login.auth.php" method="POST">
    <input type="email" name="email" placeholder="email" value=<?= isset($_GET['email'])? $_GET['email']: '' ?>>
    <input type="password" name="password" placeholder="password"><br>
    <button type="submit" name="submit">Log in</button>
    <a href="./password-reset.php">FORGOT PASSWORD?</a>
</form>
</body>
</html>



