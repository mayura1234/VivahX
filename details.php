<?php

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Details</title>

    <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    -->
  </head>

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
                          <li class="scroll-to-section"><a href="index.html">Services</a></li>
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
                          <li><a href="#">Account</a></li> 
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
            <h2>Details</h2><br>
            <h6 style="color: rgb(196, 196, 196);">Please enter the following details to activate your account</h6>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <div class="container"><center>
        <form class="form-control form-group" action="" method="post">
            <div class="form-control disp"><br>
                <h5>Basic Information</h5>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="fname">First Name:
                        <input type="text" name="fname" id="fname" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <label for="mname">Middle Name:
                        <input type="text" name="mname" id="mname">
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <label for="lname">Last Name:
                        <input type="text" name="lname" id="lname" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <label for="phone">Primary Phone Number:
                        <input type="number" name="phone" id="phone" min="11111" max="9999999999" required>
                    </label>
                </div><br>
                <div class="col-12 col-md-12">
                    <label for="aphone">Alternate Phone Number:
                        <input type="number" name="aphone" id="aphone" min="11111" max="9999999999" required>
                    </label>
                </div>
                <br>
                <div class="col-12">
                    <label for="mail">Primary Mail Address:
                        <input type="email" name="mail" id="mail">
                    </label>
                </div>
                <br>
                <div class="col-12">
                    <label for="amail">Alternate Mail Address:
                        <input type="email" name="amail" id="amail">
                    </label>
                </div>     
                <br>
                <div class="col-12">
                    <label for="address">Address:<br>
                        <textarea name="address" id="address" cols="40" rows="3"></textarea>
                    </label>
                </div> <br>
                <div class="col-12">
                    <input type="button" value="ADD" onclick="">
                </div><br>
            </div>
            <br>
            <div class="form-control disp" hidden>
                <br>
                <h5>PHYSIX</h5>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="height">Height:
                        <input type="text" name="height" id="height" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="weight">Weight:
                        <input type="text" name="weight" id="weight" required>
                    </label>
                </div>
                <br>
                <div class="col-12 col-md-12 ">
                    <label for="compxn">Complexion:
                        <input type="text" name="compxn" id="compxn" required>
                    </label>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-4 col-md-4 ">
                        <label for="fphoto">Face Photo: &nbsp;
                            <input type="file" id="fphoto" name="fphoto" accept="image/*">
                        </label>
                    </div>
                    <div class="col-4 col-md-4 ">
                        <label for="bphoto">Full Photo: &nbsp;
                            <input type="file" id="bphoto" name="bphoto" accept="image/*">
                        </label>
                    </div>
                </div>  <br>
            </div>
            <br>
            <div class="form-control disp" hidden>
                <br>
                <h5>Advanced Basics</h5>
                <br>
                <label for="nakshatra">Nakshatra:
                    <input type="text" name="nakshatra" id="nakshatra">
                </label>
                <br><br>
                <label for="paada">Paada:&nbsp;
                    <input type="number" name="paada" id="paada" min="1" max="4">
                </label>
                <br><br>
                <label for="gotra">Gotra:
                    <input type="text" name="gotra" id="gotra">
                </label>
                <br><br>
                <label for="dob">Birth Date:
                    <input type="date" name="date" id="date">
                </label><br><br>
            </div><br>
            <div class="form-control disp" hidden>
                <br>
                <h5>Professional Details</h5><br>
                <label for="grad">Top Graduation:
                    <input type="text" name="grad" id="grad">
                </label><br><br>
                <label for="prof">Primary Profesison:
                    <input type="text" name="prof" id="prof">
                </label><br><br>
                <label for="earn">Yearly Earnings:
                    <input type="text" name="earn" id="earn">
                </label><br><br>
            </div><br>
            <div class="form-control disp" hidden>
                <br><h5>Family Details:</h5><br>
                <label for="pa">Father Name:
                    <input type="text" name="pa" id="pa">
                </label><br><br>
                <label for="paoccu">Father Occupation:
                    <input type="text" name="paoccu" id="paoccu">
                </label><br><br>
                <label for="ma">Mother Name:
                    <input type="text" name="ma" id="ma">
                </label><br><br>
                <label for="maoccu">Mother Occupation:
                    <input type="text" name="maoccu" id="maoccu">
                </label><br><br>
                <label for="brono">Number of Brothers:
                    <input type="number" name="brono" id="brono" min="0">
                </label><br><br>
                <label for="sisno">Number of Sisters:
                    <input type="number" name="sisno" id="sisno" min="0">
                </label><br><br>
            </div><br>
            <div class="form-control disp" hidden>
                <br>
                <h5>Other Details</h5><br>
                <label for="about">Some words about yourself:
                    <br>
                    <textarea name="about" id="about" cols="30" rows="4"></textarea>
                </label><br><br>
                <label for="req">Partner Requirements: <br>
                    <textarea name="req" id="req" cols="30" rows="4"></textarea>
                </label><br><br>
            </div>
            </div>
            </center>
        </form>
    </div>
    <style>
        .disp{
            background-color: aliceblue;
        }
    </style>
    <script>
        
    </script>
</body>
</html>