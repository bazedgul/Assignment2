<?php
$conn = mysqli_connect("localhost", "root", "", "signup");
if ($conn) {

    // echo $_REQUEST["FirstName"] . " - " . $_REQUEST["LastName"] . " - " . $_REQUEST["Email"] . " - " . $_REQUEST["Password"] . " - " . $_REQUEST["repassword"];
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $repassword = $_POST["repassword"];
    if(empty($FirstName)){
        echo "First Name is Empty";
        die();
    }

    if (empty($LastName)) {
        echo "last Name is Empty";
        die();
    }

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

    if (empty($repassword)) {
        echo "repassword is Empty";
        die();

    }
    if($Password != $repassword){
        echo "Password not Matching";
        die();
    }


    $insert = "INSERT INTO `form` (`FirstName`,`LastName`,`Email`,`Password`,`repassword`) VALUES('$FirstName ', '$LastName', '$Email', '$Password', '$repassword')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        echo "200";
    } else {
        echo "insertion failed";
    }


} else {
    echo "Connection failed ";
}

?>