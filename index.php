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
h2{
    color:white;
    text-shadow:1px 1px 2px black, 0 0 5px darkblue;
}

.card{
        font-family: Arial, Helvetica, sans-serif;
    }
 #ques {
     min-height : 433px;
 }
</style>
</head>

<body>
        <?php  include 'partials/dbconnect.php'; ?>
        <?php  include 'partials/header.php'; ?>
            

<!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?java,laptop" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?HTML,Mobile"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x700/?coding,PHP" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



<!-- category container -->
    <div class="container my-3" id="ques">

        <h2 class="text-center"> iDiscuss- Browse Categories</h2>

        <div class="row">


             <!-- fetch all category -->

<?php

$sql = " SELECT * FROM `categories`";
$result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_assoc($result))
{
// echo $row['category_id'];
// echo $row['category_name'];
$id = $row['category_id'];
$cat = $row['category_name'];
$desc = $row['category_description'];
echo "<div class='col-md-4 my-4'>

                <div class='card' style='width: 18rem;'>

                    <img class='card-img-top' src='https://source.unsplash.com/500x400/?".$cat.",coding'
                        alt='Card image cap' >

                    <div class='card-body'>
                        <h5 class='card-title'><a href='threadlist.php?catid=".$id."'>" .$cat."</a></h5>
                        <p class='card-text'>". substr($desc , 0 ,80)."....</p>
                        <a  href='threadlist.php?catid=".$id."' class='btn btn-primary'>View Threads</a>
                    </div>

                </div>

            </div>";
}

?>




           
            






           



        </div>

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