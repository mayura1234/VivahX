<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title> Accounts</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

  </head>
  <?php

    include("connection.php");
    include("functions.php");

    $username="kes2";
    $query="select rec_id,email from user where uname='$username'";
    
    if($res=$con->query($query)){
      echo "User Fetched!";
      foreach ( $res as $i){
        echo $i['rec_id'];
        echo "IN FOR EACH";
       // $query2="select * from details where rec_id=$i[rec_id]";
        //if($res=$con->query($query)){

        //}
      }
      
    }else{
      echo "Some Error!";
    }
    
  ?>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="index.html">Home</a></li>
                          <li class="scroll-to-section"><a class="active" href="account_listings.html">Meet People</a></li>
                          <li class="scroll-to-section"><a href="index.html">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="index.html">Testimonials</a></li>
                          <li><a href="contact-us.html">Contact Support</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>LISTINGS</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="services" id="listings">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="service-item">
            <i class="fas fa-archive"></i>
            <h4>User1</h4>
            <p>Details</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
            <i class="fas fa-cloud"></i>
            <h4>User2</h4>
            <p>Details</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
            <i class="fas fa-charging-station"></i>
            <h4>User3</h4>
            <p>Details</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
            <i class="fas fa-suitcase"></i>
            <h4>User4</h4>
            <p>Destails</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
            <i class="fas fa-archway"></i>
            <h4>User5</h4>
            <p>Details</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-item">
            <i class="fas fa-puzzle-piece"></i>
            <h4>User6</h4>
            <p>Details</p>
          </div>
        </div>
      </div>
    </div>
  </section>