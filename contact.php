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
       .container {
          min-height:100vh;
          margin-left:15%;
          
         
                }
 h1{
   margin-left:25% ;
 }
 body{
   background-color:#f4f4f4;
 }

           
.button{
  margin-left:25%;

}
                
    </style>
  </head>
  <body>
  <?php  include 'partials/dbconnect.php'; ?>
  <?php  include 'partials/header.php' ?>



  <div class="container my-3 ">

  <h1>Contact Us</h1>
  
  <form>
  
    
  
       <div class="form-row">

          <div class="col-md-4 ml-4">
            <input type="text" class="form-control" placeholder="First name">
          </div>


          <div class="col-md-4 ml-4">
            <input type="text" class="form-control" placeholder="Last name">
          </div>

      </div>
      <br>



        <div class="form-row">
            <div class="col-md-4 ml-4">
              <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="col-md-4 ml-4">
              <input type="number" class="form-control" placeholder="Phone No">
            </div>

       </div>
        <br>



       <div class="form-row">

                <div class="form-group col-md-4 ml-4">
                      <select id="inputState" class="form-control">
                        <option selected>Country</option>
                        <option>Australia & New Zealand</option>
                        <option>Brazil</option>
                        <option>China</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                        <option>India</option>
                        <option>India</option>
                      </select>
                </div>
                <div class="col-md-4 ml-4">
                    <input type="text" class="form-control" placeholder="Company Name">
                </div>
        </div>
        <br>



        <div class="form-row">

                    <div class="form-group col-md-4 ml-4">
                          <select id="inputState" class="form-control">
                            <option selected>Industry</option>
                            <option>Banking & Financial Services</option>
                            <option>Energy - Oil & Gas, Oil Field Services & Renewable</option>
                            <option>Government</option>
                            <option>Healthcare</option>
                            <option>High Tech</option>
                            <option>Insurance</option>
                            <option>Manufacturing</option>
                            <option>Media & Information Servicess</option>
                          </select>
                    </div>
                    <div class="form-group col-md-4 ml-4">
                          <select id="inputState" class="form-control">
                            <option selected>Services & Technologies</option>
                            <option>Advanced Drug Development Platform</option>
                            <option>Assurance</option>
                            <option>Business Intelligence</option>
                            <option>Consulting</option>
                            <option>Cyber Security Practice</option>
                            <option>Digital Software Solutions</option>
                            <option>Engineering & Industrial Services</option>
                            <option>IT Services</option>
                          </select>
                    </div>
        </div>
            <br>


          <div class="form-row">
                      <div class="form-group col-md-4 ml-4">
                              <select id="inputState" class="form-control">
                                <option selected>Inquiry Category</option>
                                <option>Request for Information/Proposal</option>
                                <option>Alliance/ Partnerships</option>
                                <option>Jobs/HR</option>
                                <option>Suppliers</option>
                                <option>Other</option>
                              </select>
                        </div>


        
                        <div class="form-check form-check-inline ml-4">
                            <label>Are you an existing client?</label> 
                            <input class="form-check-input ml-4" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1" >Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                          <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
            </div>
            <br>

                          <div class="form-group  ml-4">
                            <label for="exampleFormControlTextarea1">How can we help you?</label>
                            <textarea class="form-control col-md-8" id="exampleFormControlTextarea1"  rows="3"></textarea>
                           </div>

                         <div class="button">
                           <button type="submit" class="btn btn-primary btn-lg col-md-2  ">Send</button>
                         </div>

 </form>
</div>

<?php include 'partials/footer.php' ?>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>