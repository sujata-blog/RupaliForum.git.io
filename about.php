<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome to iDiscuss-Coding Forum</title>
    <style>

.carousel{
min-height:90vh;


}

.para,li{
  
  font-size:18px;
  text-align: justify;
  color:#0B5345 ;

}


body{
  background-color:#f4f4f4;
}

 #first{
       
         width: 70%;
         font-family:Roboto,Helvetica,Arial,sans-serif;
      }
    

      .item{
        /* border: 2px solid black; */
        padding:15px;
        margin: auto; 
         
      } 

      .text{
        font-size:24px ;
        color:#023648;
      }

      .container{
        line-height:1.5;
      }

    </style>
  </head>
  <body>
  <?php  include 'partials/dbconnect.php'; ?>
  <?php  include 'partials/header.php' ?>

  <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x900/?coding,apple" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x900/?business,professional"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2400x900/?programming,apple" alt="Third slide">
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
 
<div class="container mb-2">
  <div id="first" class="item">
  <p class="para" >The International Forum for Volunteering in Development (Forum) is the most significant
     global network of International Volunteer Cooperation Organisations (IVCO).<strong>Forum 
     exists to share information, develop good practice and enhance cooperation across the 
     international volunteering and development sectors.</strong> It promotes the value of 
     volunteering for development through policy engagement, mutual learning and by sharing 
     innovative and good practices. Forum isa ‘virtual’ network, with a global membership 
     that includes a range of organisations involved ininternational development, including
     non-government and state organisations.</p>
    </div>


    <div id="first" class="item">
     <p class="text" ><strong>What does Forum do?</strong></p>
       <ul >
            <li style="list-style:square"><b>Information sharing:</b> Forum’s website contains a credible body of research and good practice in international volunteering for development including:
               conference reports, research papers, relevant links and contact details.</li>
            <li style="list-style:square"><b>Research:</b> Forum regularly commissions and shares research on issues related to international volunteering that is 
                 relevant to its members and in the wider development discourse.</li>
            <li style="list-style:square"><b>Networking:</b> Forum hosts an annual IVCO conference, usually in partnership with one of Forum’s member organisations. 
              Delegates from a range of agencies across the world participate in the conference, and the meeting provides an 
              opportunity for senior staff of international volunteering agencies to network and discuss key issues in volunteering
               and development.</li>
            <li style="list-style:square"><b>Promoting:</b> the value and role of international volunteering for development to be recognised and included in national
               and international development policy.</li>
       </ul>
            </div>


     <div id="first" class="item">
         <p class="text"><b>Why is Forum important?</b></p>

              <p class="para">As a network of credible international volunteering and cooperation agencies with a long track record of 
              experience,<strong> Forum has a collective voice and unified identity in the values and principles that underpin
              volunteering for development.</strong> Forum aims to share information, develop good practice and enhance cooperation 
              and support between its members. Together, members explore innovative practice and research key contemporary 
              issues, focusing on organisational learning and improved practice.</p>
            
              <p class="para"><strong>Forum members celebrate and document the significance of volunteering and civil society inclusion</strong> through:
                staying connected; sharing practices; celebrating diversity; promoting inclusiveness and reciprocity; 
                sharing knowledge; having critical debates; influencing external stakeholders; and through learning and 
                supporting each other within the volunteering community.</p>

     </div>
</div>


<?php include 'partials/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>