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

$firstname=$_POST["firstname"];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$nationality=$_POST['nationality'];
$birthdate=$_POST['birthdate'];
$length=$_POST['length'];
$estimatedarriv=$_POST['estimatedarriv'];
$prevexperience=$_POST['prevexperience'];
$requirements=$_POST['requirements'];
$addinfo=$_POST['addinfo'];
$address=$_POST['address'];
// print_r($_POST);
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