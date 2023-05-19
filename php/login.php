<?php
$conn = mysqli_connect("localhost", "root", "", "signup");
if ($conn) {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    if (empty($Email)) {
        echo "Email is Empty";
        die();
    } 
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (!preg_match ($pattern, $Email) ){  
        echo  "Email is not valid.";  
        die();    
    }
    if (empty($Password)) {
        echo "Password is Empty";
        die();
    }
    $User = "SELECT * FROM `form` WHERE Email = '$Email' AND Password = '$Password';";
    $result = mysqli_query($conn, $User);
    $row=mysqli_fetch_array($result);
    if ($row) {
        session_start();
        $_SESSION["LoginUser"] = $row;
        echo "200";
    } else {
        echo "login failed";
    }
} else {
    echo "Connection failed ";
}

?>