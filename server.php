<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user1 (fname, lname, email,password,mobileno,father,mother, caste,gender,dob)
VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['mobileno']."','".$_POST['father']."','".$_POST['mother']."','".$_POST['caste']."','".$_POST['gender']."','".$_POST['dob']."')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>

</body>
</html>