<?php 
session_start();

include("connection.php");

function dbquery2(){
// if(isset(['username'])){
    
//      $uname=$_POST['username'];
//      $password=$_POST['password'];

//      $sql1="select *from user where uname='".$uname"' and password='".$password"' limit 1";
       
//        $result="mysql_query(sql1)"
  
    
      $user_name="";
      $passwd"";

      $user_name=($_POST['username']);
      $passwd=($_POST['password']);

      $query = "SELECT *FROM user WHERE uname='$user_name' and password='$passwd' limit 1";
     
    //   password"";
    //  $passwd=($_POST['password']);
     // $query2 = "SELECT password FROM user WHERE password='$passwd'";
     
     $result=mysql_query($query)
     if(mysql_num_rows($result)!==1){
         echo "Invalid Credentials....";
         exit();
     } 
     //else
    // echo "Invalid credentials...!";
//  }
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
        function btnprs1(){
            var usr=document.getElementById("user").value;
            var psw=document.getElementById("pass").value;
            if(usr==NULL || psw==NULL){
                document.getElementById("error_msg").innerHTML="<h6 class='text-danger'>Enter all credentials</h6><br>";
            }else{
             <?php      dbquery2();          ?>  
            }
        }
      </script> 
</head>
<body>
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky bg-success">
    <div class="container">
        <div class="row">
            <div class="col-12" class="col-sm-6">
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
  <h1> Login Form </h1>
  <br>
  <form class="from-group" method="post">
    <div class="col-6" class="col-sm-12">
      <label for="username" class="form-label">User Name:
          <input type="text" id="user" class="form-control"required name="username" >
      </label>
      <!-- <br><br> -->
    </div>
    <div class="col-6">
      <label for="password" class="form-label">Password:
          <input type="password" id="pass" name="password" class="form-control" required >
      </label>
    </div>
      <!-- <br><br> -->
       <!-- <label for="reppass">Repeat Password:
          <input type="password" name="" id=""required>
      </label><br><br>
      <label for="email">Email:
          <input type="email" name="" id=""required>
      </label><br><br>
      <label for="usertype">Gender:<br>
          <input type="radio" name="gender" id="">Male<br>
          <input type="radio" name="gender" id="">Female
      </label><br><br>     -->
      <div class="col-6">
        <input type="reset" value="Reset" class="btn btn-danger"> 
      <input type="submit" value="Submit" class="btn btn-success" onclick="btnprs1();" >
     
    </div>
  </form>
  </center>
  </div>
</body>
</html>