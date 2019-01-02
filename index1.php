<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<?php
$servername = "localhost";
$apply = "root";
$pass = "";
$dbname = "mydb";

$firstname=$_GET["firstname"];
$lastname=$_GET['lastname'];
$email=$_GET['email'];
$phonenumber=$_GET['phonenumber'];
$nationality=$_GET['nationality'];
$birthdate=$_GET['birthdate'];
$length=$_GET['length'];
$estimatedarriv=$_GET['estimatedarriv'];
$prevexperience=$_GET['prevexperience'];
$requirements=$_GET['requirements'];
$addinfo=$_GET['addinfo'];
$address=$_GET['address'];
print_r($_GET);
// Create connection
$conn = mysqli_connect($servername, $apply, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO apply (firstName, lastname, email, phonenumber, nationality, birthdate, length, estimatedarriv, prevexperience,requirements, addinfo, address)
VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$nationality', '$birthdate', $length, '$estimatedarriv', '$prevexperience', '$requirements', '$addinfo', '$address')" ;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
</body>
</html>