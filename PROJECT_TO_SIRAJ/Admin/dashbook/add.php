<?php
include("connection");

?>
<?php

if(isset($_POST['book_title'])
&& isset($_POST['author'])){
    $conn= ConnectDB();
    $targetDir = "/PROJECT_TO_SIRAJ/Admin/dashbook";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    $sql="insert into books (title, category,description) VALUES ('".$_POST["book_title"]."','".$_POST["category"]."','".$_POST["description"]."')";
    $result = mysqli_query($conn,$sql) or die("Connection Failed".mysqli_error($conn));
    if ($result==1) {
        $sql1 = "insert into book_image(image)VALUES('".$targetFile."')";
    }
    $conn -> close();
}
?>