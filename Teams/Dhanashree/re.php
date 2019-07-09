<?php
$servername = "localhost";
$username = "dj";
$password = "dj123";
$dbname = "dj23";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sql = "INSERT INTO renew (fname, lname)VALUES ('$fname', '$lname')";

if (mysqli_query($conn, $sql)) {
    echo  '<script type="text/javascript">

          window.onload = function () { alert("new record added   "); }

</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
