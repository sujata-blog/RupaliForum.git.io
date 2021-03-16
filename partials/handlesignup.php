<?php

$showAlert=false;
$showError=false;
$showError1=false;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include 'dbconnect.php';

    $username = $_POST['signupuser'];
    $user_password = $_POST['password'];
    $user_cpassword = $_POST['cpassword'];


    // check whether this email exist
    $sqlexist = "select * from `users` where username = '$username'";
    $result = mysqli_query($conn,$sqlexist);
    $numrows = mysqli_num_rows($result);

    if($numrows > 0)
    {
        $showError1 = true;
        header("location:/forum/index.php?account=true&error=$showError1");
        exit();


    }
    else 
    {
                if($user_password ==  $user_cpassword)
                {
                $hash = password_hash($user_password , PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` ( `username`, `user_password`)
                    VALUES ( '$username', '$hash')";
                
                $result =mysqli_query($conn,$sql);
                        if($result)
                        {
                            $showAlert = true;
                            header("location:/forum/index.php?signupsuccess=true");
                            exit();

                        }
                }
                else
                {
                    $showError = true;
                    header("location:/forum/index.php?signupsuccess=false&error=$showError");
                    exit();
                    
                }
     }

    // if we dont want to tell error to the user then we can place this header here & we want to tell error 
    // to user then place this header into else block
    // header("location:/forum/index.php?signupsuccess=false&error=$showError");
}

?>
<!-- E:\xampp\htdocs\Forum\partials\handlesignup.php -->