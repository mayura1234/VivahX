<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include("connection.php");
        include("functions.php");
        if(isset($_POST['myfile'])){ echo($_POST['myfile']);
        move_uploaded_file($_FILES['myfile']['tmp_name'], "userupolads/document" . $_FILES['myfile']['name']);
        $file=$_FILES["myfile"]["name"];
        
       // $data1 = file_get_contents($_FILES['myfile']['tmp_name']);
        $sql="INSERT INTO `details`(`rec_id`, `face_photo`) VALUES ('888','$file')";
        if($con->query($sql)===TRUE){
            echo("INSERTED to details");
        }else echo("Fail Again!");
    }else echo("Truely not recognised");
    }
    ?>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <div class="col-12">
        <label for="aadhar">Upload Aadhar Card:
            <input type="file" name="myfile" id="myfile" required>
        </label>
        <input type="submit" value="submit">
    </div><br>
</form>
</body>
</html>