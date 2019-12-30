<?php
$tmpfile = $_FILES['file']['tmp_name'];
$upload = "/var/www/html/upload/";
$filename = $_FILES['file']['name'];
try{
    if(is_uploaded_file($tmpfile)){
        if(move_uploaded_file($tmpfile, $upload . $filename)){
          echo $filename . " upload sucessfully!!";
        } else {
          echo $filename . " upload failed.";
        }
    } else {
        echo "ready for upload" . $tmpfile;
    }
}catch(Exception $e) {
    echo "Error: ", $e->getMessage().PHP_EOL;
}
?>

<form action="./uploader.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="file upload">
</form>
