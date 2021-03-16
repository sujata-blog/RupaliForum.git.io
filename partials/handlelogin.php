<?php

$showAlert=false;
$showError=false;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
     include 'dbconnect.php';
     
     $username = $_POST['loginuser'];
     $password =$_POST['loginPassword'];

     $sql = "select * from `users` where `username`='$username'";
     $result = mysqli_query($conn,$sql);
     
     $numRows = mysqli_num_rows($result);
              if($numRows == 1)
                  {
                            $row = mysqli_fetch_assoc($result);
                    
                                if(password_verify($password,$row['user_password']))
                                {
                                session_start();
                                $_SESSION['login'] = true;
                                $_SESSION['sno'] = $row['srno'];
                                $_SESSION['username'] = $username;
                                
                                    
                               header("location:/forum/index.php?loginsuccess=true");
                                    exit();
                                }

                                else
                                {
                                    $showError=true;
                                   
                                    header("location:/forum/index.php?loginsuccess=false&error=$showError");
                                }
                  }
        
}





?>