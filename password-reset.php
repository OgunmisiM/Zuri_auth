<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Reset your password</h2>
    <form action="./auth/reset.password.auth.php" method="POST">
        <input type="email" name="email" placeholder="email" value=<?= isset($_GET['email'])? $_GET['email']: '' ?>>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit" name="submit">RESET PASSWORD</button>
    </form>
    <?php
  if (isset($_GET['s'])) {
    if ($_GET['s'] == 1) {
      echo '<span style="position:fixed;padding:1rem;background:red;border-radius:1rem;color:white;right:5px;bottom:15px">EMPTY INPUT FIELD</span>';
    }
  }
?>

</body>
</html>