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

 mysqli_select_db($conn,'login');
// Check connection\
$userid=$_POST['email'];
$pass=$_POST['password'];
$q="select * from user1 where email='$userid' AND password='$pass' ";
$result=mysqli_query($conn,$q);
$n=mysqli_num_rows($result);
if ($n==1) {


echo "This Email is Already Registrated";
header('location:mainpage.php');
}else{
	# code...
$image_name=$_FILES['banner_image1'];
$filename1=$_FILES["banner_image1"]["name"];
$tempname1=$_FILES["banner_image1"]["tmp_name"];
$folder1="photosource/".$filename1;
move_uploaded_file($tempname1, $folder1);

$image_name=$_FILES['banner_image2'];
$filename2=$_FILES["banner_image2"]["name"];
$tempname2=$_FILES["banner_image2"]["tmp_name"];
$folder2="sign/".$filename2;
move_uploaded_file($tempname2, $folder2);
 
 $image_name=$_FILES['banner_image3'];
$filename3=$_FILES["banner_image3"]["name"];
$tempname2=$_FILES["banner_image3"]["tmp_name"];
$folder3="adhar/".$filename3;
move_uploaded_file($tempname3, $folder3);
 

$sql = "INSERT INTO user1 (fname, lname, email,password,mobileno,father,mother, caste,gender,dob,distict,pincode,state,address,qualification, max,obtained,yop,per,qualification2, max2,obtained2,yop2,per2,qualification3, max3,obtained3,yop3,per3,photosource,sign,adhar)

VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['mobileno']."','".$_POST['father']."','".$_POST['mother']."','".$_POST['caste']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['distict']."','".$_POST['pincode']."','".$_POST['state']."','".$_POST['address']."','".$_POST['qualification1']."','".$_POST['max1']."','".$_POST['obtained1']."','".$_POST['yop1']."','".$_POST['per1']."','".$_POST['qualification2']."','".$_POST['max2']."','".$_POST['obtained2']."','".$_POST['yop2']."','".$_POST['per2']."','".$_POST['qualification3']."','".$_POST['max3']."','".$_POST['obtained3']."','".$_POST['yop3']."','".$_POST['per3']."','$folder1','$folder2','$folder3')";
}
 
 mysqli_query($conn, $sql);

 if (isset($_POST['sub'])) {
 	# code...
 	header('location:mainpage.php');
 }

 
 
?>