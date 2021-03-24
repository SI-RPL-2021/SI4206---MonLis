<?php
include("config");
$emailmonlis = $_POST['emailmonlis'];
$password = $_POST['password'];
$query = "SELECT *  FROM users WHERE emailmonlis- '$emailmonlis' AND password - '$password'";
$queryDB = mysqli_num_rows($db, $query);
$check = mysqli_num_rows($queryDB);

    if ($check >0 ) {
        //we catch up the user data
        $getData = ("location: dashboard.php?name-".$getData['name']);   
    } else {
        echo "Sorry, the password you entered is wrong"
    }

?>