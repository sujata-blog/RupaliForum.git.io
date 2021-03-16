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



form{
    font-size:20px;
    font-weight:bold;
}

    
   .jumbotron{
    box-shadow: 6px 6px gray;
    background-color:#ffffe6;
    
   }

    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #ffe6f9;

    }
    /* this is one para...class name is peer */
    .peer{
        font-size: 20px;
    }
    #ques {
        min-height: 433px;
    }
    </style>
</head>

<body>
    <?php  include 'partials/dbconnect.php'; ?>
    <?php  include 'partials/header.php'; ?>
    

<!-- this php for jumbotron1 -->
<?php

$id = $_GET['catid'];
$sql="SELECT * FROM `categories` WHERE `category_id` = $id";

$result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_assoc($result))
{

    $catname = $row['category_name'];
    $catdesc = $row['category_description'];
}

?>




<!-- this php for form -->
<?php 
$showAlert =false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST')
{
    // insert thread into db

    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];
    $sno = $_POST['sno'];

// <script> alert "hello" </script>  na db madhe &lt or &gt ni represent karty ani from varti as it is dakhvty.
// jr aapn he str_replace use nahi kelo tr te form varti tags dakhvt nhi.
    
    $th_title= str_replace("<","&lt;",$th_title);
    $th_title = str_replace(">", "&gt;", $th_title);

    $th_desc = str_replace("<","&lt;", $th_desc);
    $th_desc = str_replace(">", "&gt;",  $th_desc);



    $sql="INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`)
     VALUES ('$th_title', '$th_desc', '$id', '$sno')";
         $result = mysqli_query($conn,$sql);
         $showAlert =true;

         if($showAlert)
         {
                        echo "
             <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong  >Success!</strong> Your Thread has been added plz wait for community to respond.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
             </div> ";
         }

}

?>










<div class="container my-4">

        <div class="jumbotron">
            <h1 class="display-5">Welcome to <?php echo $catname; ?> forum</h1>
            <p class="lead"><?php echo $catdesc;  ?></p>
            <hr class="my-4">
            <p class="peer">This is a peer to peer forum for sharing knowledge with each other.</p>
            <!-- <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p> -->
        </div>
    </div>



<!-- <h1>Start Discussion</h1> -->
<!--  $_SERVER['PHP_SELF']  use for same page reloading-->


  <?php

if(isset($_SESSION['login']) && $_SESSION['login'] == true)
{
  echo '<div class="container">
        <h2 class="py-3">Start Discussion</h2>

        <form action=" '. $_SERVER["REQUEST_URI"].' " method="post">
            <div class="form-group">
                <label for="title">Thread Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Thread">
                <small id="emailHelp" class="form-text text-muted">Keep your title as short as possible.</small>
            </div>



            <div class="form-group">
                <label for="desc">Eillaborate your Concern</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                <input type="hidden" name="sno" value='.$_SESSION['sno'].'>

            </div>


            <button type="submit" class="btn btn-success">Submit</button>
        </form>


    </div>';
}
    else
    {
      echo '<div class="container">
      <h2 class="py-3">Start Discussion</h2>
        <p class="lead"><b>You are not logged in.Please login to be able to start a Discussion.</b></p>
        </div>';
    }
?>









<!-- this php for browse questions -->
    <div class="container mb-5" id="ques">
        <h2 class="py-3">Browse Questions</h2>
   
        <?php

        $id = $_GET['catid'];
       $sql="SELECT * FROM `threads` WHERE thread_cat_id = $id";
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
                        
                        $sql2 ="select username from `users` where srno='$thread_user_id'  ";
                        $result2 = mysqli_query($conn,$sql2);

                        $row2 = mysqli_fetch_assoc($result2);
                        
               
                         
                      echo '<div class="media my-3">
                                <img class="mr-3" src="img/user.png" width="54px" alt="Generic placeholder image">
                                <div class="media-body">
                                <p class ="font-weight-bold my-0" style="font-size:18px">'.$row2['username'].' at '.$time.'</p>
                              <h5 class="mt-0"><a  class="text-dark" href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
                                   '.$desc.' 
                                   </div> 
                            </div>';


                    }
    
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
     




        <!-- remove later -->
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