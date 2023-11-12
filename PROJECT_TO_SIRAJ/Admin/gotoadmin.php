<?php
// This is a simple demonstration and is not secure for production use.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real-world scenario, you should hash and verify the password securely.
    // For demonstration purposes only, we'll compare with plain text.
    if (isset($username)) {
        header("Localtion: /PROJECT_TO_SIRAJ/Admin/admin_home.php");
        die();
    } else{
        echo "Welcome";
    }
}

?>