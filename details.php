<?php
session_start();

include("connection.php");
include("functions.php");
/*
$query1 = "SELECT face_photo FROM details WHERE rec_id='$user_name'";
    $runquery1=$con->query($query1);
*/
$user_name=$_SESSION['user_name'];
$query1 = "SELECT details,email,rec_id FROM user WHERE uname='$user_name'";
$runquery1=$con->query($query1);
if(mysqli_num_rows($runquery1) != 0){
    $row1=mysqli_fetch_assoc($runquery1);
    $rec_id=$row1['rec_id'];
    $email=$row1['email'];
    if($row1['details']==1){
        header("Location: waiting.html");
    }
}else{echo("No rows?");}


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name=$_SESSION['user_name'];
    $user_id=$_SESSION['uid'];
    $phone=$_POST['phone'];   
    echo $phone;

        $query2 = "SELECT phone FROM details where phone='$phone'";
        $runquery2=$con->query($query2);
        if(mysqli_num_rows($runquery2) == 0){
          /*  if(($_FILES['fphoto']['size'] > 0)&&($_FILES['bphoto']['size'] > 0)&&($_FILES['aadhar']['size'] > 0)){       
                $target_dir = "userupolads/document/";
                $file_name1 = $_FILES['fphoto']['name'];
                $file_tmp1 = $_FILES['fphoto']['tmp_name'];
                $file_name2 = $_FILES['bphoto']['name'];
                $file_tmp2 = $_FILES['bphoto']['tmp_name'];
                $file_name3 = $_FILES['aadhar']['name'];
                $file_tmp3 = $_FILES['aadhar']['tmp_name'];
                if (move_uploaded_file($file_tmp1, $target_dir.$file_name1)) {
                echo ("<h1>File1 Upload Success</h1>");
                if (move_uploaded_file($file_tmp2, $target_dir.$file_name2)) {
                    echo "<h1>File2 Upload Success</h1>";
                    if (move_uploaded_file($file_tmp3, $target_dir.$file_name3)) {
                        echo "<h1>aadhar Upload Success</h1>";
                        }
                    }
                }*/
                
                $recid= random_num(4);
                $fname=$_POST['fname'];
                $mname=$_POST['mname'];
                $lname=$_POST['lname'];
                $aphone=$_POST['aphone'];
                $amail=$_POST['amail'];
                $addr=$_POST['address'];
                $height=$_POST['height'];
                $weight=$_POST['weight'];
                $comp=$_POST['compxn'];
                $nakshatra=$_POST['nakshatra'];
                $paada=$_POST['paada'];
                $gotra=$_POST['gotra'];
                $dob=$_POST['date'];
                $graduation=$_POST['grad'];
                $profsn=$_POST['prof'];
                $salary=$_POST['earn'];
                $fname=$_POST['pa'];
                $mname=$_POST['ma'];
                $paoccu=$_POST['paoccu'];
                $maoccu=$_POST['maoccu'];
                $bro=$_POST['brono'];
                $sis=$_POST['sisno'];
                $about=$_POST['about'];
                $requirement=$_POST['req'];
                /*$data1 = file_get_contents($_FILES['fphoto']['doc1']);
                $data2 = file_get_contents($_FILES['bphoto']['doc2']);
                $jataka_doc = file_get_contents($_FILES['jataka_doc']['doc2']);
                $aadhar = file_get_contents($_FILES['aadhar']['aadhar']);*/
                $stmt4 = "INSERT INTO details(`rec_id`, `fname`, `minit`, `lname`,phone,`aphone`, `aemail`, `address`, `height`, `weight`, `complexion`, `about`, `profession`, `earnings`, `requirement`,`qualification`) VALUES ('$recid','$fname','$mname','$lname','$phone','$aphone','$amail','$addr','$height','$weight','$comp','$about','$profsn','$salary','$requirement','$graduation')";
                        if($con->query($stmt4)===TRUE){
                            echo("INSERTED to details");
                            $jtk_id= random_num(4);
                            $query4="INSERT INTO `jaataka`(`jtk_id`, `gotra`, `DOB`, `paada`, `nakshatra`, `user_id`) VALUES ('$jtk_id','$gotra','$dob','$paada','$nakshatra','$user_id')";
                            if($con->query($query4)===TRUE){
                                echo("INSERTED to jataka");
                                $fam_id= random_num(4);
                                $query5="INSERT INTO `family`(`family_id`, `father`, `mother`, `fa_occu`, `mo_occu`, `bro_no`, `sis_no`,user_id) VALUES ('$fam_id','$fname','$mname ','$paoccu','$maoccu','$bro','$sis','$user_id')";
                                if($con->query($query5)===TRUE){
                                    echo("INSERTED to family");
                        }else
                            echo("Some error");
            }
        }
    }else
        echo("Phone number already registered.."); 
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
                         <!-- <img src="assets/images/logo.png" alt="">
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
                          <li><a href="#"><?php echo "$_SESSION[user_name]";?></a></li> 
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
        <form class="form-control form-group" action="" method="post" enctype="multipart/form-data">
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
            </div>
            <br>
            <div class="form-control disp">
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
                            <input type="file" name="fphoto" >
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
            <div class="form-control disp">
                <br>
                <h5>Advanced Basics</h5>
                <br>
                <label for="nakshatra">Nakshatra:
                    <select name="nakshatra" id="star">
                        <option value="ashwini">Ashwini</option>
                        <option value="bharani">Bharani</option>
                        <option value="krittika">Krittika</option>
                        <option value="rohini">Rohini</option>
                        <option value="mrigashirsha">Mrigashirsha</option>
                        <option value="ardra">Ardra</option>
                        <option value="punarvasu">Punarvasu</option>
                        <option value="pushya">Pushya</option>
                        <option value="ashlesha">Ashlesha</option>
                        <option value="magha">Magha</option>
                        <option value="purvaphalguni">Purva Phalguni</option>
                        <option value="uttaraphalguni">Uttara Phalguni</option>
                        <option value="hasta">Hasta</option>
                        <option value="chitra">Chitra</option>
                        <option value="svati">Svati</option>
                        <option value="Vishakha">Vishakha</option>
                        <option value="Anuradha">Anuradha</option>
                        <option value="Jyeshtha">Jyeshtha</option>
                        <option value="mula">Mula</option>
                        <option value="purvaashadha">Purva Ashadha</option>
                        <option value="uttaraashadha">Uttara Ashadha</option>
                        <option value="shravana">Shravana</option>
                        <option value="dhanishta">Dhanishta</option>
                        <option value="shatabhisha">Shatabhisha</option>
                        <option value="purvabhadrapada">Purva Bhadrapada</option>
                        <option value="uttarabhadrapada">Uttara Bhadrapada</option>
                        <option value="revati">Revati</option>                        
                    </select>
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
                <label for="jataka_doc">
                    <input type="file" name="jataka_doc" id="jataka_doc">
                </label><br><br>
            </div><br>
            <div class="form-control disp">
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
            <div class="form-control disp">
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
            <div class="form-control disp">
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
            <br>
            <div class="form-control disp">
                <br>
                <h5>Verification</h5>
                <br>
                <div class="col-12">
                    <label for="aadhar">Upload Aadhar Card:
                        <input type="file" name="aadhar" id="aadhar">
                    </label>
                </div><br>
            </div><br>
            <div class="form-control disp">
                <br>
                <div class="col-12">
                    <h4>ACKNOLEDGEMENT</h4>
                </div><br>
                <div class="col-12">
                    <input type="submit" value="Submit" class="btn btn-primary" onclick="run();">
                </div><br>
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