

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(a1.jpg);">
	<br>

	<div class="row" style="background-image:url(backgroundt.jpg); ">
		<div class="col-sm-1"><img src="dulogo.jpg" class="rounded-circle" width="100" height="100"></div>
		<div class="col-sm-11">
	
	<div class="alert alert-info" style="margin:1%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-info">Upload Documents</span></h1></strong></div></div></div>
	<br><br>

	<form action=" " method="post" enctype="multipart/form-data">
		 
 		 
 		<div class="row" style="border-style: inset;padding: 10px; border-color:white;">
 		<div class="col-sm-3"><div class="alert alert-info" style="margin-left:1%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-danger">Passport Photo</span></h1></strong></div> </div>
 		<div class="col-sm-3" style="padding: 30px;"><input type="file" name="banner_image1" ></div>
		<div class="col-sm-6" style="color: white;"><small><p>1.Allowed Photo Size – 3.5 cm x 4.5 cm</p>
<p>2.Size of file should be between 25kb-100 kb
<p>3.Ensure that the size of the scanned image is not more than 100KB. If the size of the
<p>4.file is more than 100 KB, then adjust the settings of the scanner such as the DPI resolution, no. of colours etc., during the process of scanning.
</p></small></div>
 
 		</div><br><br>

 		<div class="row" style="border-style: inset;padding: 10px;border-color:white;">
 		<div class="col-sm-3"><div class="alert alert-info" style="margin-left:1%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-danger">Signature</span></h1></strong></div> </div>
 		<div class="col-sm-3" style="padding: 30px;"><input type="file" name="banner_image2" ></div>
		<div class="col-sm-6" style="color: white;"><small><p>1.If the Applicant's signature on the answer script, at the time of the examination, doesnot match the signature on the Hall Ticket, the applicant will be disqualified.</p>
<p>2.Dimensions 3.5 cm x 1.5cm (preferred)</p>
<p>3.Size of file should be between ( 10KB – 50KB)</p>
<p>4.Ensure that the size of the scanned image is not more than 50KB</small></p></div>
 
 		</div><br><br>

 		<div class="row" style="border-style: inset;padding: 10px; border-color:white;">
 		<div class="col-sm-3"><div class="alert alert-info" style="margin-left:1%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-danger">VoterID/AdharCard</span></h1></strong></div> </div>
 		<div class="col-sm-3" style="padding: 30px;"><input type="file" name="banner_image3" ></div>
		<div class="col-sm-6"  style="color: white;"><small><p>1. There will be separate links for uploading certificates and documents such as educational
qualification certificates, experience certificate etc.</p>
 
<p>2.Your Online Application will not be registered unless you upload your photograph and
signature as specified.</p>

<p>3. Size of file should be between ( 100 KB – 500 KB)</p>
<p>4. Ensure that the size of the scanned image is not more than 500 KB</p></small></div>
 
 		</div>
 		<br><br>


 
 <button type="Submit" name="sub" class="btn btn-success btn-block" style="margin-left:2%;margin-right:4%;" ><span class="spinner-border spinner-border-sm"></span>Submit Your Application Form</button>
 </form>

<div class="col">
	<div class="row-sm-3"></div>
</div>

</body>
</html>
<?php
error_reporting(0);
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_select_db($conn,'login');
// Check connection\
$userid=$_POST['userid'];
$pass=$_POST['pass'];




$q="select * from user1 where email='$userid' AND password='$pass' ";
$result=mysqli_query($conn,$q);
$n=mysqli_num_rows($result);
$row = mysqli_fetch_array($result); 


$image_name=$_FILES['banner_image1'];
print_r($image_name) ;
$filename1=$_FILES["banner_image1"]["name"];
$tempname1=$_FILES["banner_image1"]["tmp_name"];
 
$folder1="photo/".$filename1;
echo "$folder1";;
move_uploaded_file($tempname1, $folder1);
 


$sql = "UPDATE user1 SET photosource='$folder1' WHERE id=$row[id]";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>





