<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="/PROJECT_TO_SIRAJ/student/style_login_student.php">
    <script type="javascript/text">
        function validateForm() {
            document.write("")
        }

    </script>
</head>
<body>
    <div class="nav">
        <img src="/PROJECT_TO_SIRAJ/main/img/mainlogo.png" alt="logo" class="logo">
        <img src="/main/img/logoname.png" alt="" class="logon">
        <a href="/main/Home.html" >Home</a>
        <a href="/main/Books.html" class="bookss">Books</a>
        <a href="#">About</a>
        <a href="#">Feedback</a>
        <a href="/student/login_student.html">Log in</a>
    </div>
    <a href="/PROJECT_TO_SIRAJ/Admin/admin_login.php" class="nextp"><img src="/PROJECT_TO_SIRAJ/icon/arrowleft.png" alt="StaffLogin" title="StaffLogin"></a>
    <div class="container">
        <div class="containerL">
            <img src="/PROJECT_TO_SIRAJ/loginimg/loginp.jpg" alt="">
        </div>
        <div class="containerR">
            <h2>Student Login</h2>
            <form method="POST" action="login_student.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                
                <input type="password" id="password" name="password" required>
                
                <button type="submit"><a href="Student_Profile.html">Login</a></button>
                <a href=""><p class="forgotpass">forgot password?</p></a>
                <a href="/student/Student_Register.html" class="createstdacct"><p>Create Acccount</p></a>
            </form>
        </div>
    </div>
    <footer>
        <p class="label1">&copy; 2023 Mark Francis Sauquillo. All right reserved.</p>
    </footer>
</body>
</html>
<?php

?>