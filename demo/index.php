<?php

include("connection.php");

if(isset($_POST["fb_btn"]))
{

          $fn = $_POST["fullname"];
          $eid = $_POST["email"];
          $place = $_POST["place"];
          $cont = $_POST["contact"];
          $fb = $_POST["feedback"];


          $qry = "INSERT INTO `feedback`(`id`, `fullname`, `email`, `place`, `contact`, `fb_text`) VALUES (NULL,'$fn','$eid','$place','$cont','$fb')";
          $result = mysqli_query($connect, $qry);

          if($result)
          {
            ?> <script> alert("feedback Submitted successfully"); </script> <?php
          }
          else
          {
            ?> <script> alert("Something went wrong"); </script> <?php
          }
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Discovery Destination</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    
    <link  href="CSS/style.css" rel="stylesheet">
    
</head>
<body>
    <!-- Navigation Bar -->

    <?php include("navbar.php");?>
    
      <!-- Navigation Ends Here -->
      
      

      <!-- Hero section / jumbotron section start -->

      <div class="jumbotron bg-theme" id="hero">
        <h3 class="display-4">Hello, Travelers!</h3>
        <p class="lead">Welcome to our Discovery Destination page, your gateway to a world of unparalleled exploration and wanderlust. We take immense pride in presenting you with a diverse collection of meticulously crafted tours, each offering a unique perspective on some of the most captivating destinations across the globe. Whether your heart yearns for the romance of Europe, the mystique of South East Asia, the opulence of Dubai, the grandeur of America, the enchantment of Australia and New Zealand, or the rich tapestry of India's own treasures, we have a journey that awaits you.Our diverse range of offerings includes both international and domestic tours, each designed to provide you with an unforgettable travel experience. From the exotic allure of international destinations to the cultural richness of domestic getaways, our tours are tailored to cater to your every wanderlust.</p>
        <hr class="my-4">
          <a class="btn btn-dark btn-lg" href="#" role="button">Explore</a>
        </p>
      </div>

      <!-- Hero section Ends Here  -->



      <!-- About Us Section -->

      <hr class="hr">
      <div class="container" id="about">
        <h1> About <span> us </span> </h1>
        <hr>
        <div class="row">	
            <div class="col-md-6">
                <img src="images/tour.jpeg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><h5>Dear Guest,</h5></p>

                   <p >Thank you for your continued support and the confidence that you have placed in us. As we build the foundation of success, we completely recognize the trust you place in us and with your continuous support, we assure to maintain our best-in-class service.<br>
                    
                    We are greatly humbled and honoured to be receiving the President of India Category-I Award by Shri Pranab Mukherjee for Tour Operator, Rest of India and National Tourism Awards 2013-14 Category-III for Outstanding Performance in Tourism Sector and Domestic Tour Operator - Jammu & Kashmir Region.<br>
                    
                    For Kesari Family, you are the centre of everything we do. Thus with every tour, we ensure working tirelessly to meet and outstrip your expectation in an enjoyable and responsible way.<br>
                    
                    </p>
    
                <h4> Objectives - </h4>
                <ul>
                    <li> <i class="bi bi-bookmark-fill"></i> Crafting unforgettable journeys, one adventure at a time.</li>
                    <li> <i class="bi bi-bookmark-fill"></i> Your gateway to unforgettable travel experiences awaits.</li>
                    <li> <i class="bi bi-bookmark-fill"></i> Unveiling the world's wonders, one trip at a time. </li>
                    <li> <i class="bi bi-bookmark-fill"></i> Your passport to extraordinary adventures starts here. </li>
                </ul>
    
            </div>
        </div>
    </div>
        <br><br><br><br>

      <!-- About us section ends here  -->

      

      <!-- Gallery Section starts from Here  -->
        
      
        <hr class="hr">
    <div class="container" id="gallery">
        <h1> Repository <span> Section </span> </h1>
        <hr>
        <br><br>
      <div class="gallery1">
          <img src="images/1.jpg" alt="Not Found">
          <img src="images/2.jpg" alt="Not Found">
          <img src="images/6.jpg" alt="Not Found">
          <img src="images/4.jpg" alt="Not Found">
          <img src="images/3.jpg" alt="Not Found">
          <img src="images/13.jpeg" alt="Not Found">
          <img src="images/5.avif" alt="Not Found">
          <img src="images/9.jpg" alt="Not Found">
          <img src="images/10.webp" alt="Not Found">
          <img src="images/7.avif" alt="Not Found">
          <img src="images/12.jpeg" alt="Not Found">
        </div>
    </div>
      <!-- Gallery Section Ends Here  -->






      <!-- feedback  -->

 <br><br><br>
<hr class="hr">
<div class="container" id="contact">
	<h1> Feedback <span> Section </span> </h1>
	<hr>
	<br><br>
	<div class="row">
		<div class="col-md-6">
            <div id="tour">
                <img src="images/tour1.jpg" alt="Not Found">
            </div>
		</div>
		<div class="col-md-6">
			<h2 align="center" font-family="tahoma"> Share Your </h2>
            <h5 align="center"> <span>Feedback!!! </span></h5>
			<div class="row">
				<div class="col-md-6">
             <form method="post">
              <input type="text" name="fullname" placeholder="Fullname" class="form-control">
              <input type="text" name="place" placeholder="Enter your home towm" class="form-control">
                
              </div>
              <div class="col-md-6">
                  <input type="email" name="email" placeholder="Email ID" class="form-control"> 
                  <input type="tel" name="contact" placeholder="Mobile number" class="form-control"> 
                  
              </div><br><br>
              <textarea class="form-control" rows="6" placeholder="Describe your journey..." name="feedback" ></textarea>
              <button type="submit" name="fb_btn" class="btn btn-primary">Submit</button>
             </form>
                    
					
			</div>
		</div>
	</div>
</div>


     <!-- feedback ends here  -->



     

     <!-- footer section -->


<div class="bg-theme" style="margin-top: 100px" id="footer">
    <div class="container" id="footer">
        <div class="row mt-5">
            <div class="col-md-3">
                <h5> Main Links </h5>
                <ul>
                    <li> <a style="color:black"href="index.php"> Home </a></li>
                    <li> <a style="color:black"href=""> Group Tours </a></li>
                    <li> <a style="color:black"href=""> Tours At a Glance </a></li>
                    <li> <a style="color:black"href=""> Best Tour </a></li>
                    <li> <a style="color:black"href=""> Speciality Tours </a></li>
                    <li> <a style="color:black"href=""> Economy Tours</a></li>
                </ul> 
            </div>
    
            <div class="col-md-3">
                <h5> Guest Services Links </h5>
                <ul>
                    <li> </li>
                    <li> <a style="color:black"href=""> Guest Corner </a></li>
                    <li> <a style="color:black"href=""> Join as PSA </a></li>
                    <li> <a style="color:black"href=""> Join as GSA</a> </li>
                    <li> <a style="color:black"href=""> About Us</a> </li>
                    <li> <a style="color:black"href=""> How to Book</a> </li>
                </ul>
    
            </div>
    
            <div class="col-md-3">
                <h5> Terms & Condition </h5>
                <ul>
                    <li> <a style="color:black"href=""> Booking and Payment</a> </li>
                    <li> <a style="color:black"href=""> Cancellation and Refund Policy</a> </li>
                    <li> <a style="color:black"href=""> Travel Documents and Insurance</a></li>
                    <li> <a style="color:black"href=""> Health and Safety </a></li>
                    <li> <a style="color:black"href=""> Changes to Itinerary </a></li>
                    <li> <a style="color:black"href=""> Miscellaneous</a> </li>
                    <li> <a style="color:black"href=""> Responsibilities of Travelers </a></li>
                    
                </ul>
    
            </div>
    
            <div class="col-md-3">
                <h5> Contact US </h5>
     <i class="bi bi-geo-alt-fill"></i> 123 Elm Street
     Springfield,<br>MA 01103
     United States <br>
    
     <i class="bi bi-telephone-fill"></i> (555) 555-1234 <br>
    
     <i class="bi bi-envelope-arrow-down-fill"></i> holiday@dd.in
            </div>
                
    
        </div>	
    
        <ul id="socialicons"> 
            <li><a style="color:black"href="https://www.whatsapp.com/ "> <i class="bi bi-whatsapp"></i> </a></li>
            <li> <a style="color:black"href="https://www.instagram.com/ "> <i class="bi bi-instagram"></i></a> </li>
            <li> <a style="color:black"href="https://www.facebook.com/ "> <i class="bi bi-facebook"></i> </li>
            <li> <a style="color:black"href="https://twitter.com/?lang=en "> <i class="bi bi-twitter-x"></i> </li>
        </ul>
    
    </div>	
    </div>	
    
    <!-- end of footer section -->




     



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>






