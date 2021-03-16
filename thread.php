<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome to iDiscuss-Coding Forum</title>

    <style>

    body{
        background-color:#ffffe6;
    }
    #ques {
        min-height: 433px;
    }

    form{
    font-size:20px;
    font-weight:bold;
}

    .jumbotron{
    box-shadow: 6px 6px gray;
    background-color:#ffccff;
    
   }
    </style>
</head>

<body>
    <?php  include 'partials/dbconnect.php'; ?>
    <?php  include 'partials/header.php'; ?>
    


<!-- this php for jumbotron -->
  <?php

$id = $_GET['threadid'];
$sql="SELECT * FROM `threads` WHERE thread_id=$id";

$result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_assoc($result))
{
    
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
    $thread_user_id = $row['thread_user_id'];

    
        //   query the  users table to  find out name of original posted person         // 
         $sql2 ="select username from `users` where `srno`='$thread_user_id' ";
         $result2 = mysqli_query($conn,$sql2);

         $row2 = mysqli_fetch_assoc($result2);
         $posted_by = $row2['username'];
}
?>








<!-- this php for form -->
<?php

$showAlert =false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST')
{
   
// inseert into comment table
    $comment = $_POST['comment'];

    // <script> alert "hello" </script>  na db madhe &lt or &gt ni represent karty ani from varti as it is dakhvty.
    // jr aapn he str_replace use nahi kelo tr te form varti tags dakhvt nhi.
    $comment = str_replace("<","&lt;",$comment);
    $comment = str_replace(">", "&gt;", $comment);

    $sno = $_POST['sno'];
 $sql="INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`)
     VALUES ( '$comment', '$id', '$sno')";
         $result = mysqli_query($conn,$sql);
         $showAlert =true;

         if($showAlert)
         {
                        echo "
             <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong  >Success!</strong> Your comment has been added.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
             </div> ";
         }

}


?>


    <div class="container my-4">

        <div class="jumbotron">
            <h3 class="display-4"><?php echo $title; ?> </h3>
            <p class="lead"><?php echo $desc;  ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with each other.</p>
            <!-- <p class="lead">
                 <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a> 
            </p> -->

            <p><b>Posted By : <?php echo $posted_by?></b></p>
        </div>
    </div>






<?php
if(isset($_SESSION['login']) && $_SESSION['login']==true)
{
  echo '<div class="container">
        <h2 class="py-3">Post a Comment</h2>
        <form action=" '. $_SERVER['REQUEST_URI'] .'" method="post">
           
            <div class="form-group">
                <label for="comment">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="sno" value='.$_SESSION['sno'].'>

            </div>


            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
        </div>';
}
else
{
   echo' <div class="container">
    <h2 class="py-3">Post a Comment</h2>
    <p class="lead"><b>You are not logged in.Please login to be able to post comments.</b></p>
    </div>';
}
    ?>

      
       
      
      
       <div class="container mb-5" id="ques">
        <h2 class="py-3">Discussion</h2>

     <?php

        $id = $_GET['threadid'];
       $sql="SELECT * FROM `comments` WHERE thread_id=$id";

        $result = mysqli_query($conn,$sql);
        $noResult = true;


                    while($row = mysqli_fetch_assoc($result))
                    {
                        // $id = $row['thread_id'];

                        $noResult = false;
                        $id = $row['comment_id'];
                         $content = $row['comment_content'];
                         $time = $row['comment_time'];

                         $thread_user_id =$row['comment_by'];
                        
                        $sql2 ="select username from `users` where `srno`='$thread_user_id' ";
                        $result2 = mysqli_query($conn,$sql2);

                        $row2 = mysqli_fetch_assoc($result2);
                        // $email = $row2['user_email']


                      echo '<div class="media my-3">
                                <img class="mr-3" src="img/user.png" width="54px" alt="Generic placeholder image">
                                <div class="media-body">
                               <p class ="font-weight-bold my-0">'.$row2['username'].' at '.$time.'</p>
                                '.$content.'
                                </div>
                            </div>';


                    }

                         if($noResult)
                                {
                                echo ' <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <p class="display-4"><b>No Post Found</b></p>
                                        <p class="lead">Be the first person to post your comment.</p>
                                    </div>
                                    </div>';
                                    
                                }

        ?> 
































        <!-- 
        <div class="media my-3">
            <img class="mr-3" src="img/user.png" width="54px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">Unable to install pyaudio error in window</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>


         -->

    </div>



    <?php include 'partials/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>