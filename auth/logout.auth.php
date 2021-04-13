<?php
session_start();
    if(isset($_POST['submit'])){
        session_abort();
        return header('location: ../index.php');
  }
    return header('location: ../index.php');
?>