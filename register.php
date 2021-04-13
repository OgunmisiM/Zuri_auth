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
      echo '<span style="position:fixed;padding:1rem;background:red;border-radius:1rem;color:white;right:5px;bottom:15px">EMPTY INPUT FIELDS!</span>';
    }else if($_GET['s'] == 2){
      echo '<span style="position:fixed;padding:1rem;background:red;border-radius:1rem;color:white;right:5px;bottom:15px">EMAIL ALREADY EXISTS!</span>';
    }else {
      echo '<span style="position:fixed;padding:1rem;background:red;border-radius:1rem;color:white;right:5px;bottom:15px">CREATE AN ACCOUNT</span>';
    }
  }
?>
<form action="./auth/register.auth.php" method="POST">
    <input type="email" name="email" placeholder="Valid email" value=<?= isset($_GET['email'])? $_GET['email']: '' ?>>
    <!-- <input type="text" name="username" placeholder="username"> -->
    <input type="date" name="date" value=<?= isset($_GET['date'])? $_GET['date']: '' ?>>
    <input type="password" name="password" placeholder="password"><br>
    <button type="submit" name="submit">Register</button>
</form>  
</body>
</html>
