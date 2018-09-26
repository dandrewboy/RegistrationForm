<?php

$hostname = "wftuqljwesiffol6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"	
$username = "gk4nhycoj7ikfsf8"	
$password = "krvk3p8l77jtppoy"	
$port = 3306	
$database = "jv4xgk33vu849apd"

$hostname = "localhost:8889";
$username = "root";
$password = "root";
$database = "heroku";

//Create connection to localhost
$conn = mysqli_connect($hostname, $username, $password, $database);

$personName = $_POST['FirstName'];
$personLastName = $_POST['LastName'];
$personUsername = $_POST['Username'];
$personPassword = $_POST['Password'];
$personConfirmPassword = $_POST['ConfirmPassword'];
$personEmail = $_POST['email'];
$personDateOfBirth = $_POST['DateofBirth'];

$sql_statement = "INSERT INTO `registration`(`Id`, `FirstName`, `LastName`, `Username`, `Password`, `ConfirmPassword`, `email`, `DateofBirth`) VALUES (NULL, '$personName','$personLastName','$personUsername','$personPassword','$personConfirmPassword ','$personEmail',,'$personDateOfBirth')";

if($conn->query($sql_statement) == TRUE) {

    include "home.php";

} else{

    echo "ERROR" . $sql_statement . "<br>" . $conn->error;
}

$conn->close();
