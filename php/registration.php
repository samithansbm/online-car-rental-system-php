<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$picup_value = $_POST['picup_value'];
$picup_date = $_POST['picup_date'];
$dropoff_value = $_POST['dropoff_value'];
$dropoff_date = $_POST['dropoff_date'];


$sql = "INSERT INTO registration (name ,email, phone , picup_value , picup_date,dropoff_value , dropoff_date)
VALUES ('$name', '$email', '$phone' ,'$picup_value' , '$picup_date' , '$dropoff_value' ,
'$dropoff_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("refresh:1 ; url:tabel.html");

?>
