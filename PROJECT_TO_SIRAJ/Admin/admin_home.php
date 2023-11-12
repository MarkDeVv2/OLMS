<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/PROJECT_TO_SIRAJ/Admin/style_admin_home.css">
    <script>
        function logout(){
            window.location = "/PROJECT_TO_SIRAJ/main/index.php";
        }
        function gotobook(){
            window.location = "/PROJECT_TO_SIRAJ/Admin/dashbook/books.php";
        
        }
    </script>
</head>
<body>
    <nav class="nav1">
        <img src="/PROJECT_TO_SIRAJ/main/img/mainlogo.png" alt="logo" class="logo">
        <img src="/PROJECT_TO_SIRAJ/main/img/logoname.png" alt="" class="logon">
        <button type="submit" onclick="logout()">LOG OUT</button>
    </nav>
    <nav class="nav2">
        <a href="#section1" class="active">DASHBOARD</a>
        <a href="#section2">BOOKS</a>
        <a href="#section3">USER</a>
    </nav>
    <section id="section1">
        <hr>
        <h1>ADMIN DASHBOARD</h1>
        <div class="booklist">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/a_book_icon.png" alt="">
            <p id="booklist_value">0</p>
            <p class="booklistlbl">Book Listed</p>
        </div>
        <div class="bnry">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/a_not_returnyet.png" alt="">
            <p class="bnry_value">0</p>
            <p class="bnrylbl">Book Not Return Yet</p>
        </div>
        <div class="Register_User">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/a_users.png" alt="">
            <p class="R_user_value">0</p>
            <p class="R_userlbl">Registered User</p>
        </div>
        <div class="List_Category">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/a_category.png" alt="">
            <p class="L_C_value">0</p>
            <p class="L_Clbl">Registered User</p>
        </div>
    </section>
    <section id="section2">
        <hr>
    <h1>BOOKS</h1>

        <Button class="btnadd" type="submit" onclick="gotobook()">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/Books.png" alt="">
            <p class="addlbl">Books Record</p>
        </Button>
        <Button class="btndel" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/book_borrowed.png" alt="">
            <p class="dellbl">Borrowed Books</p>
        </Button>
        <Button class="btnupd" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/books_sales.png" alt="">
            <p class="dellbl">Book Sales</p>
        </Button>
        <Button class="btnblist" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/Books.png" alt="">
            <p class="dellbl"> Books List</p>
        </Button>

    </section>  
    <section id="section3">
        <hr>
    <h1>USER</h1>

        <Button class="btnadd" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/user_list.png" alt="">
            <p class="addlbl">User List</p>
        </Button>
        <Button class="btndel" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/user_confirm.png" alt="">
            <p class="dellbl">User Confirmation</p>
            <div class="notif">
                <p id="notif_value"></p>
            </div>
        </Button>
        <Button class="btnupd" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/update_user.png" alt="">
            <p class="dellbl">Update User</p>
        </Button>
        <Button class="btnblist" type="submit">
            <img src="/PROJECT_TO_SIRAJ/Admin/dashboardicon/Books.png" alt="">
            <p class="dellbl"> Books List</p>
        </Button>

    </section>  
</body>
</html>
<!-- <?php
    $con = mysqli_connect("localhost","root");
    if(!$con){
        echo '<script type="text/javascript">';
        echo 'alert("Could not connect ");.mysqli_error()';
        echo '</script>';
    }
    mysqli_select_db($con,"ols");
    $result = mysqli_query($con,"SELECT * FROM");
?> -->