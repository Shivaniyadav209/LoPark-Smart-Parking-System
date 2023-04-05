<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lopark";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$phoneno =  $_REQUEST['phoneno'];
$message = $_REQUEST['message'];
 
$sqlquery = "INSERT INTO contactus VALUES('$name', '$email', '$phoneno', '$message')";
 
if ($conn->query($sqlquery) === TRUE) {
    echo '<script>window.alert("MESSAGE SENT");</script>';
    echo '<script>window.open("index.html", "_self");</script>';
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}
?>