<?php
session_start();


function mapp($uid,$uname,$pas,$at,$mai,$ri){
    include("connection.php");

    $stmt = "insert into user (user_id,uname,password,acnt_type,email,rec_id) values ('$uid','$uname','$pas','$at','$mai','$ri')";
    if($con->query($stmt)===TRUE)
        return ("inserted");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        alert("mapping");
        if(true){
            uid='1122';
            
            uname='kes3';
            pas='123';
            at='b';
            mai='kes3@x.c';
            ri='1235';
            <?php 
            echo"hi<script>document.writeln(uname);</script>";
            //mapp(uid,uname,pass,at,mai,ri) ?>
        }
    </script>
</body>
</html>