<?php

if(isset($_POST['submit'])){
 $user = $_POST['username'];
 $pass =  $_POST['password'];

  if(!empty($user) && !empty($pass)){
    if((preg_match("/[A-Za-z0-9]/",$user) == TRUE) && (preg_match("/((?!\d*$)(?![a-z]*$)[a-z0-9]{4,10})$/",$pass) == TRUE)){
        extract($_REQUEST);
        $file=fopen("loginFile.txt", "a");

        $user_pass = file_get_contents("loginFile.txt");
        $user_pass = explode("\n",$user_pass);
        $userArray = array();
        foreach($user_pass as $value){
          $split = explode(':', $value);
          $userArray[$split[0]] = $split[0];
        }

        if (isset($userArray[$_POST['username']])) {
          echo '<script>alert("Username already exists");</script>';
        }

        else{
          fwrite($file, $user .":");
          fwrite($file, $pass . "\n");
          fclose($file);
          echo '<script>alert("You Have successfully created an Account. You are now ready to Log in");</script>';
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