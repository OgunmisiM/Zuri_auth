<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME <?= $_SESSION['email']?></h1>

    <form action="./auth/logout.auth.php" method="post"><button type="submit" name="submit">LOGOUT</button></form>
</body>
</html>