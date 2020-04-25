<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_select_db($conn,'login');

$image_name=$_FILES['banner_image1'];
print_r($image_name) ;
$filename1=$_FILES["banner_image1"]["name"];
$tempname1=$_FILES["banner_image1"]["tmp_name"];
$folder1="photo/".$filename1;
move_uploaded_file($tempname1, $folder1);

$image_name=$_FILES['banner_image2'];
print_r($image_name) ;
$filename2=$_FILES["banner_image2"]["name"];
$tempname2=$_FILES["banner_image2"]["tmp_name"];
$folder2="sign/".$filename2;
move_uploaded_file($tempname2, $folder2);

$image_name=$_FILES['banner_image3'];
print_r($image_name) ;
$filename3=$_FILES["banner_image3"]["name"];
$tempname3=$_FILES["banner_image3"]["tmp_name"];
$folder3="adaar/".$filename3;
move_uploaded_file($tempname3, $folder3);





       
?>