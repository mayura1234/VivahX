<?php 
session_start();

include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name=($_POST['username']);
    $psw=($_POST['password']);
    $rpsw=($_POST['reppass']);
    $mail=($_POST['email']);
    $acnt_type=($_POST['gender']);

    $query = "SELECT uname FROM user WHERE uname='$user_name'";
    $query2= "SELECT email FROM user WHERE email='$mail'";
    $runquery=$con->query($query);
    $runquery2=$con->query($query2);
    if(mysqli_num_rows($runquery) == 0)
        if($psw==$rpsw)
            if(strlen($psw)>5)
                if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $psw) )
                    if(mysqli_num_rows($runquery2)==0)
                    {
                        $uid=random_num(4);
                        $recid=random_num(4);
                        $stmt2="insert into details (rec_id) values ('$recid')";
                        if($con->query($stmt2)===TRUE){
                            $stmt = "insert into user (user_id,uname,password,acnt_type,email,rec_id) values ('$uid','$user_name','$psw','$acnt_type','$mail','$recid')";
                            if($con->query($stmt)===TRUE){
                                echo("INSERTED");
                                header("Location: login.php");
                            }else
                                echo("Some error");
                        }else{echo"Error in details linkage..";}
                    }
                    else
                        echo("Use some other mail id");
                else    
                    echo("Passwords must be alpha numeric");
            else
                echo("passowrd must be more than 5 charcters");
        else   
            echo("Passwords does not match");
    else
        echo("user name exists");
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

  </head>

<body>


  <!-- ***** Header Area Start ***** 
  <header class="header-area header-sticky bg-success">
      <div class="container">
          <div class="row">
            <div class="col-12" class="col-sm-6">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** 
                      <a href="index.html" class="logo">
                          <img src="assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** 
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
                      <!-- ***** Menu End ***** 
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <center>
  <div class="page-container" class="col-6" class="col-sm-12">
    <!-- <div class="col-6" class="col-sm-12"> -->
        
        <br><br><br><br><br><br> 
    <h1> Registration Form </h1>
    <br>
    <form class="from-group"  method="post" action="#">
        <div class="col-6">
        <label for="username" class="form-label">User Name:
            <input type="text" class="form-control"  name="username" id="un" required>
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Email:
                <input type="email" class="form-control" name="email" id="mail" required>
            </label>
        </div>
        </label>
        <!-- <br><br> -->
        <div class="col-6">
        <label for="password" class="form-label">Password:
            <input type="password" class="form-control"  name="password" id="pw" required>
        </label>
        <!-- <br><br> -->
    </div>
    <div class="col-6">
         <label for="reppass" class="form-label">Repeat Password:
            <input type="password"class="form-control" name="reppass" id="rpw" required>
        </label>
    </div>
        <!-- <br><br> -->
   
        <!-- <br><br> -->
        <div class="col-6">
        <label for="gender" class="form-label">Gender:<br>
            <input type="radio" name="gender" id="bg" value="bg">Male<br>
            <input type="radio" name="gender" id="b" value="b">Female
        </label>
    </div>
        <!-- <br><br>     -->
        <span id="error_msg"></span> 
        <input type="reset" value="Reset" class="btn btn-danger"> 
        <input type="submit" class="btn btn-success"value="Submit">
       
    </form>
    </center> 
    </div>
</div>
</body>
</html>