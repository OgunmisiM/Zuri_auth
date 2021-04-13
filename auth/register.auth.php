<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = $_POST['date'];

        if (empty($email) || empty($date) || empty($password)){
            return header('location:../register.php?s=1&email='.$email.'&date='.$date);
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return header('location:../register.php?date='.$date);
        }
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        // // if file is missing
        // $auth_file  = fopen('auth.json', "a");
        $GET_AUTH_FILE = file_get_contents('auth.json');

        if (empty($GET_AUTH_FILE)) {
            $start_registering = [];
            $GET_AUTH_FILE = json_encode($start_registering);
        }

        $get_db = json_decode($GET_AUTH_FILE, true); 
        
        foreach ($get_db as $key => $user) {
            if($user['email'] === $email){
                return header('location:../register.php?s=2');
            }
        }
        $new_user = [
            'email'=> $email,
            'password'=> $hash_password
        ];
        array_push($get_db, $new_user);
        $encode_db = json_encode($get_db);
        file_put_contents("auth.json", $encode_db);
        // fclose($auth_file);

        return header('location:../login.php?s=3');
        
    }
    return header('location: ../index.php');
?>