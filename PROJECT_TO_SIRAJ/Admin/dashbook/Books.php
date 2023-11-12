<?php

    include("connection.php");
    ConnectDB();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="books.css">
    <script>
        function add(){
            window.location='/PROJECT_TO_SIRAJ/Admin/dashbook/bookadd.php';
        }
    </script>
    </head>
<body>
    <button class="btn-add" onclick="add()">Add</button>
<h1 class="heading-books">Book Record</h1>
<div class="container">
    <table>
        <tr>
            <th class="thid">ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Operation</th>

        </tr>
        <tbody></tbody>
    </table>
</div>

    
</body>
</html>
