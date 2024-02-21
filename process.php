<?php

include("configt.php");

if (isset($_POST["submit_Cred"])) {
    $userName = $_POST["userName"];
    $userPassword = $_POST["userPassword"];
    $userEmail = $_POST["email"];
    $userFname = $_POST["firstname"];
    $userLname = $_POST["lastname"];
    $userRole = $_POST["roles"];

    $query = "INSERT INTO `users`(`user_Name`, `user_Password`, `email`,`first_Name`,`last_Name`,`role`) VALUES('$userName','$userPassword','$userEmail','$userFname','$userLname','$userRole')";

    if ($con -> query($query) === TRUE) {
        echo "Inserted Successfully";
    } else {
        echo "Error: Data not inserted";
    }

    $con->close();

}



?>