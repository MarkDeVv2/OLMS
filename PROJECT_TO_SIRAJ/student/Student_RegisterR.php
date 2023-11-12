<?php
  include("connection.php");
  ConnectDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="Student_Registerr.css">
</head>
<body>
    <div class="nav">
        <img src="/main/img/mainlogo.png" alt="logo" class="logo">
        <img src="/main/img/logoname.png" alt="" class="logon">
        <a href="/main/Home.html" >Home</a>
        <a href="/main/Books.html" class="bookss">Books</a>
        <a href="#">About</a>
        <a href="#">Feedback</a>
        <a href="/student/login_student.html">Log in</a>
    </div>  

  <div class="container">
    <form action="inserttodb.php" method="POST">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>

      <label for="middleName">Middle Name:</label>
      <input type="text" id="middleName" name="middleName">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactNumber" required>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>

      <button type="submit"> Submit</button>
    </form>
  </div>
<?php

?>





</body>
</html>
