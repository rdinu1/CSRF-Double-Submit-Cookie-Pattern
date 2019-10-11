<?php


$users = include './users.txt';

   $username = $_POST['uname'];
   $password = $_POST['pwd'];

       if($users[$username] === $password){
        // Generate session id and csrf token
        session_start();
        $session_id = uniqid();            
        $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
        $_SESSION['username'] = $_POST['uname'];

        // set session_id cookie and csrf token cookie
        setcookie('session_id', $session_id, time() + (86400 * 30), "/",false,false);
        setcookie('csrf_Token', $_SESSION['csrf_token'], time() + (86400 * 30), "/",false,false);
        
        header("location: ./home.php");
       }else{
         header("location: ./loginpage.php?error=Invalid username or password! Please check the credentials and try again!");
       }
?>

