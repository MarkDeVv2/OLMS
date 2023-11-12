
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/PROJECT_TO_SIRAJ/Admin/style_admin_login.css">
    <script>
        function confirmAction() {
            // user =document.getElementById("username").value;
            // pass = document.getElementById("password").value;
            // if (user == "admin" && pass == "admin") {
            window.location.href = "/PROJECT_TO_SIRAJ/Admin/admin_home.php";
        //  }
     
         }
    </script>
</head>
<body>
    <div class="nav">
        <img src="/PROJECT_TO_SIRAJ/main/img/mainlogo.png" alt="logo" class="logo">
        <img src="/PROJECT_TO_SIRAJ/main/img/logoname.png" alt="" class="logon">
        <a href="/PROJECT_TO_SIRAJ/main/index.php" >Home</a>
        <a href="/PROJECT_TO_SIRAJ/main/Books.html" class="bookss">Books</a>
        <a href="#">About</a>
        <a href="#">Feedback</a>
       
    </div>
    <a href="/PROJECT_TO_SIRAJ/student/login_student.php" class="nextp"><img src="/PROJECT_TO_SIRAJ/icon/arrowright.png" alt="StaffLogin" title="Student Login"></a>

    <div class="container">
        <div class="containerL">
            <img src="/PROJECT_TO_SIRAJ/loginimg/Staffloginp.jpg" alt="">
        </div>
        <div class="containerR">
            <h2>Admin Login</h2>
            <form >
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                
                <input type="password" id="password" name="password" required>
                
                <button type="submit" onclick="confirmAction()">Login</button>
                </form>
        </div>
    </div>
    <footer>
        <p class="label1">&copy; 2023 Mark Francis Sauquillo. All right reserved.</p>
    </footer>
    
</body>
</html>
