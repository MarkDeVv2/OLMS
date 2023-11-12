<?php

include("connection.php"); 
?>
<?php

    if (isset($_POST['firstName'])&&
    isset($_POST['middleName']) &&
    isset($_POST['lastName']) &&
    isset($_POST['email']) &&
    isset($_POST['gender']) &&
    isset($_POST['contactNumber'])
    ) {
         $firstname = $_POST['firstName'];
    $middlename = $_POST['middleName'];
     $lastname = $_POST['lastName'];
     $email = $_POST['email'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contactnumber = $_POST['contactNumber'];
    $allow = "0";

        $conn = ConnectDB();
$sql = "insert into user_info (firstName, middleName, lastName,gender,Email,contactNumber)
VALUES ('".$firstname."', '".$middlename."', '".$lastname."','".$email."','". $gender."','".$contactnumber."')";

$fire = mysqli_query($conn,$sql)or die("Connection Failed".mysqli_error($conn));
if($fire==1){
    $ins = "insert into user_acc (Username, Password)  VALUES ('".$username."', '".$password."')";
    $fire2 = mysqli_query($conn,$ins) or die("Can't insert into other table ".mysqli_error($conn));
    if($fire2== 1){
    
            $ins2 = "insert into authentication (Allow)  VALUES ('".$allow."')";
            $fire3 = mysqli_query($conn,$ins2) or die("Can't insert into other table ".mysqli_error($conn));
                header('Location: login_student.php');
    }
}
    



// if ($conn->query($sql) === TRUE) {
//   $ins = "insert into user_acc (Username, Password)
//   VALUES ('".$username."', '".$password."')";
//   if ($conn->query($ins) === TRUE) {
//     $put = "insert into authentication (Allow)VALUES ('".$allow."')";
     
//             if($conn->query($put) === TRUE){

//             }else{
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//             }
//         }else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//       }
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

    
    
    }
    $conn -> close();

?>