<?php
include("connection.php");
        function imageaddup(){
        if (isset($_POST["submit"])) {
            $targetDir = "uploads/"; // Change this to your desired upload folder
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        } else {
        echo "File is not an image.";
        $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

            // Insert image path into the database
            $imagePath = $targetFile;
            $conn = ConnectDB();
            $sql = "insert into book_image (image) VALUES ('$imagePath')";
            if ($conn->query($sql) === TRUE) {
                echo "Record inserted successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }}}}
if(isset($_POST['book_title'])
&& isset($_POST['author'])){
    $bookTitle = $_POST["book_title"];
    $category = $_POST["category"];
    $description = $_POST["description"];
    $author = $_POST["author"];
    $conn= ConnectDB();
    $sql = "insert into books(title,category,description) VALUES('".$bookTitle."','".$category."','".$description."')";
    $result = mysqli_query($conn,$sql) or die("Connection Failed".mysqli_error($conn));
    if ($result==1) {
        # code...
        $parent_id = $conn->insert_id;
        $sql2 = "insert into author(name,bookId) VALUES('".$author."','".$parent_id."')"; 
        $result2 = mysqli_query($conn,$sql2) or die("Connection Failed".mysqli_error($conn));
        
        if($result2 ==1 ){
                            $sqlr = "Select count(bookId) AS count from book_quantity ";
                            $sql_result = mysqli_query($conn,$sqlr);
                           while( $row = mysqli_fetch_assoc($sql_result)){
                            $count = $row['count'];
                           }

            
            $parent_id = $conn->insert_id;
            $sql3 = "insert into book_quantity(bookId,quantity) VALUES('".$parent_id."','".$count."')";
            $result3 = mysqli_query($conn,$sql3) or die("Connection Failed".mysqli_error($conn));
            imageaddup();
        }
        
    }
    $conn -> close();
}
?>