<?php
$servername = "localhost";
$username = "sonu";
$password = "sonu123";
$dbname = "game";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection Failed " . mysqli_connect_error());
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$psv = $_POST['psv'];
$Country = $_POST['Country'];
$State = $_POST['State'];
$City = $_POST['City'];
$DOB = $_POST['DOB'];

$sql = "call insertdata
('$fname','$lname','$email','$psv','$Country','$State','$City','$DOB')";
if (mysqli_query($conn, $sql)){
	echo "New Record created succesfully";
}
else{
echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
