<?php 
session_start();

include("connection.php");
/*
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $psw=($_POST['password']);
    $rpsw=($_POST['reppass']);
    $mail=($_POST['mail']);
    $acnt_type=($_POST['gender']);
}*/

function dbquery1(){
    $user_name="";
    $user_name=($_POST['username']);
    $query = "SELECT uname FROM user WHERE uname='$user_name'";
    //$runquery=mysqli_query($con, $query);
    //if(mysqli_num_rows($runquery) != 0)
    {
        echo("Username already exists");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VivahX</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <script>
        function btnprs(){
            var psw=document.getElementById("pw").value;
            var rpsw=document.getElementById("rpw").value;
            if(psw!=rpsw){
                document.getElementById("error_msg").innerHTML="<h6 class='text-danger'>Passwords does not match!</h6><br>";
            }else{
                <?php      dbquery1();          ?>
            }
        }
      </script>
  </head>
 
    

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky bg-success">
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
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Services</a></li>
                          <li class="scroll-to-section"><a href="#about">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
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
  <div class="container">
    <center><br><br><br><br><br><br>
    <h1> Registration Form </h1>
    <br>
    <form class="from-group" method="post">
        <label for="username">User Name:
            <input type="text" required name="username" id="un">
        </label><br><br>
        <label for="email">Email:
            <input type="email" name="email" id="mail">
        </label><br><br>
        <label for="password">Password:
            <input type="password" name="password" id="pw">
        </label><br><br>
        <label for="reppass">Repeat Password:
            <input type="password" name="reppass" id="rpw">
        </label><br><br>
        <label for="gender">Gender:<br>
            <input type="radio" name="gender" id="bg">Male<br>
            <input type="radio" name="gender" id="b">Female
        </label><br><br>   
        <span id="error_msg"></span> 
        <input type="button" value="Submit" onclick="btnprs();">
        <input type="reset" value="Reset">
    </form>
    </center>
    </div>
    </body>
    </html>
    