<!--
Login Page v1.0
processForm.php v6.1
dbconnect.php v1.0
login.html v6.0
register.html v6.0
whoAmI.html v6.0
Programmers:
    Austin Harvey
    Caitlin Sunada
    Dominic Sutton

09-23-2018
PHP code to connect user to the online registration database and log them in

-->

<?php

//Instantiating variables
$personUsername = $_POST['username'];
$personPassword = $_POST['password'];


//Error messages if one field is left blank
if($personUsername == NULL || trim($personUsername) == " "){
    exit("Username is a required field");
}
if($personPassword == NULL || trim($personPassword) == " "){
    exit("Password is a required field");
}


//Credentials for accessing registration database records
require_once "dbconnect.php";

$sql_statement = "SELECT * FROM `usertable` WHERE `username` LIKE '$personUsername' AND `password` LIKE '$personPassword' ";

$result = $connection->query($sql_statement);

//Error message for an unsuccessful connection
if ($connection->error){
    echo "Error: " . $sql_statement . "<br>";
}
//Displays "Hello" + user's first and last name
elseif ($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    include('whoAmI.html');
}
//If password or username is typed in wrong
elseif ($result->num_rows == 0)
{
    echo "password or username incorrect";
}
//If multiple users are trying to register with the same credentials
elseif ($result->num_rows > 1)
{
    echo "Multiple users have registered.";
}

//Close connection
$connection->close();
?>
