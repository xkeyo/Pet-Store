<?php

if(isset($_POST['submit'])){
  $user = $_POST['username'];
  $pass =  $_POST['password'];
 
   if(!empty($user) && !empty($pass)){
     if((preg_match("/[A-Za-z0-9]/",$user) == TRUE) && (preg_match("/((?!\d*$)(?![a-z]*$)[a-z0-9]{4,10})$/",$pass) == TRUE)){
      $file=fopen("loginFile.txt", "a");

      $user_pass = file_get_contents("loginFile.txt");
      $user_pass = explode("\n",$user_pass);
      
      $auth = false;
      foreach($user_pass as $value){
        $split = explode(':', "$value:");
        $username = $split[0];
        $password = $split[1];
        if($username == $user && $password == $pass){
          $auth =true;
          break;
        }
      }

      if($auth == true){
        session_start();
        $_SESSION['username'] = $user;
        if(isset($_SESSION['username'])){
          header("Location: giveaway.php");
        }
      }

      else{
        echo '<script>alert("Invalid Username or Password. Please Try again!");</script>';
      }
     }
     else{
      echo '<script>alert("NOT THE CORRECT FORMAT. PLEASE TRY AGAIN");</script>';
    }
  }
  else{
    echo '<script>alert("Username Field or Password Field was empty");</script>';
  }
}
?>