<?php
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)){
            return header('location:../login.php?s=1&email='.$email);
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return header('location:../login.php?date='.$date);
        }

        $auth_file  = fopen('auth.json', "a");
        $GET_AUTH_FILE = file_get_contents('auth.json');

        if (empty($GET_AUTH_FILE)) {
            return header('location:../login.php?s=3');            
        }

        $get_db = json_decode($GET_AUTH_FILE, true); 
        
        foreach ($get_db as $key => $user) {
            if($user['email'] === $email){
                if (password_verify($password, $user['password'])) {
                    $_SESSION['email'] = $email;
                    return header('location:../dashboard.php');
                }
                return header('location:../login.php?s=1&email='.$email);
            }
        }
        return header('location:../login.php?s=2');
        fclose($auth_file);
    }
    return header('location: ../index.php');
?>