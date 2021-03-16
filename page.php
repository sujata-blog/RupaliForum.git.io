<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome to iDiscuss-Coding Forum</title>

</head>
<body>
<?php  include 'partials/dbconnect.php'; ?>
    <?php  include 'partials/header.php'; ?>


    <div class="container mb-5" id="ques">
        <h2 class="py-3">Browse Questions</h2>
   
        <?php

       echo '<div>';
       $sql="SELECT * FROM `threads`";
       $noResult = true;
        $result = mysqli_query($conn,$sql);

      

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $noResult = false;
                        $id = $row['thread_id'];
                        $title = $row['thread_title'];
                        $desc = $row['thread_desc'];
                        $time = $row['thread_time'];
                        $thread_user_id =$row['thread_user_id'];
                        
                      
               
                         
                      echo '<div class="media my-3">
                                <img class="mr-3" src="img/user.png" width="54px" alt="Generic placeholder image">
                                <div class="media-body">
                                <p class ="font-weight-bold my-0">'.$id.' at '.$time.'</p>
                              <h5 class="mt-0"><a  class="text-dark" href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
                                   '.$desc.' 
                                   </div> 
                            </div>';


                    }
    echo'</div>';
                    // echo 'no result';


                    if($noResult)
                    {
                       echo ' <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <p class="display-4"><b>No Threads Found</b></p>
                            <p class="lead">Be the first person to ask a question.</p>
                        </div>
                        </div>';
                        
                    }

        ?>
     
    
</body>
</html>