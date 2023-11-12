<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Submission Form</title>
</head>
<body>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h2 {
    color: #333;
    text-align: center;
    font-size: 2em;
    line-height: 1.5em;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="text"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #4F709C;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor:pointer;
}
select {
    background-color: #4F709C;
    color: #ffff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor:pointer;
}

    </style>
<?php
// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $bookTitle = $_POST["book_title"];
//     $category = $_POST["category"];
//     $description = $_POST["description"];
//     $author = $_POST["author"];

//     // Process the uploaded image
//     $targetDir = "uploads/";
//     $targetFile = $targetDir . basename($_FILES["image"]["name"]);

//     if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
//         echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }

    // You can do further processing with the data here, like saving it to a database

?>

<h2>Book Submission Form</h2>
<form action="add.php" method="post" enctype="multipart/form-data">
    <label for="book_title">Book Title:</label>
    <input type="text" name="book_title" required><br>

        <label for="category">Category:</label>
        <select id="category" name="category">
    <option value="Biography">Biography</option>        
    <option value="Chemistry">Chemistry</option>
    <option value="Computer hardware">Computer Hardware</option>
    <option value="Database">Database</option>
    <option value="Programing Language">Programing Language</option>
    
    </select>

    <label for="description">Description:</label>
    <textarea name="description" rows="4" required></textarea><br>

    <label for="author">Author:</label>
    <input type="text" name="author" required><br>

    <label for="image">Attach Image:</label>
    <input type="file" name="image" accept="image/*" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
