<?php
session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)){
            return header('location:../password-reset.php?s=1&email='.$email);
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return header('location:../password-reset.php?date='.$date);
        }
        $GET_AUTH_FILE = file_get_contents('auth.json');

        $get_db = json_decode($GET_AUTH_FILE, true); 
        $RESET = false; 
        $USER_KEY;
        foreach ($get_db as $key => $user) {
            if($user['email'] === $email){
                $USER_KEY = $key;
                $RESET = true;
            }
        }
        if ($RESET === false) {         
            return header('location:../register.php');
        }
        $get_db[$USER_KEY]['password'] = password_hash($password, PASSWORD_DEFAULT);
        $encode_db = json_encode($get_db);
        file_put_contents("auth.json", $encode_db);
        fclose($GET_AUTH_FILE);
        return header('location:../login.php?s=4');
    }
    return header('location: ../index.php');
?>