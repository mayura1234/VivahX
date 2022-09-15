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
        $data1 = file_get_contents($_FILES['myfile']['tmp_name']);
        $sql="INSERT INTO `details`(`rec_id`, `face_photo`) VALUES ('[value-18]','[value-19]')";

    }
    ?>
</head>
<body>
    <form action="" method="post">
    <div class="col-12">
        <label for="aadhar">Upload Aadhar Card:
            <input type="file" name="myfile" id="myfile" required>
        </label>
        <input type="submit" value="submit">
    </div><br>
</form>
</body>
</html>