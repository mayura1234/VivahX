<!DOCTYPE html>
    <html>
    <head>
    <title>File Upload</title>
    </head>
    <body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="csv_file">
        <input type="submit" name="submit">
    </form>


    <?php
        if(isset($_POST['submit'])) {

            if ($_FILES['csv_file']['size'] > 0)
            {
                echo "<p>".$_FILES['csv_file']['name']." => file input successfull</p>";

                fileUpload();
            }
        }

    function fileUpload () {
        $target_dir = "userupolads/document/";
        $file_name = $_FILES['csv_file']['name'];


        $file_tmp = $_FILES['csv_file']['tmp_name'];

        if (move_uploaded_file($file_tmp, $target_dir.$file_name)) {
            echo "<h1>File Upload Success</h1>";
        }
        else {
            echo "<h1>File Upload not successfull</h1>";
        }
    }

    ?>
</body>