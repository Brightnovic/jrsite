<?php

session_start();
require_once "../config/db.php";
require_once "../utils/functions.php";

// if (isset($_POST['login']))
// {
//    if('you' == 'yous'){
//       header("Location: ../html/upload.html");
//    }else{
//       header("Location: ../login.php?wrong_password");
//    }
// }

if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   $user = get_user($email);
   
   if(!$user){
      header("Location: ../login.php?wrong_email");
   }

   if($password != $user['password']){
      header("Location: ../login.php?wrong_password");
   }else{
      $_SESSION['ADMIN'] = $user['user_id'];
      header("Location: ../html/upload.html");
   }

   
}
// if (isset($_POST['login'])) {
//    $email = sanitize($_POST['email']);
//    $password = sanitize($_POST['password']);

//    $user_id = uniqid("usr_");
//    $hash = password_hash($password, PASSWORD_DEFAULT);

//    $query = "INSERT INTO `admin`(`sn`, `user_id`, `email`, `password`) VALUES ('1','$user_id','$email','$hash')";
//    global $conn;
//    mysqli_query($conn, $query);
// }


// $email = sanitize($_POST['email']);
//    $password = sanitize($_POST['password']);

//    $user = get_user($email);
   
//    if(!$user){
//       header("Location: ../login.php?wrong_email");
//    }

//    if(!password_verify($password, $user['password'])){
//       header("Location: ../login.php?wrong_password");
//    }

//    $_SESSION['ADMIN'] = $user['user_id'];
//    header("Location: ../html/upload.html");