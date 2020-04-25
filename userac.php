<?php
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
$i=1800120000+"$row[id]";

$p=$row['photosource'];
$s=$row['sign'];

if ($n!=1){
	header('location:mainpage.php');
}


?>
<?php 

if(isset($_session['userid'])){
	header('location(login.php)');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login-<?php echo "$row[fname]";?></title>
	 <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

 
<body>
<div class="jumbotron text-center" style="height:220px;margin-top:4%;">
		<div class="row">
			<div class="col-sm-2" style="margin-bottom: 10%;">
				<img src="dulogo.jpg" width="150" height="150"  class="rounded-circle">
			</div>
			<div class="col-sm-10" style="text-align: left;"><h1><b>Department of Computer Science</b></h1><h3><b>The University Of Delhi</b></h3><h3><b>Delhi,India</b></h3></div>
			 
	</div>
	<div class="row">
		<div class="col-sm-6" style="background-color:rgb(75,75,75);color:white;"><h1><b>Application Number : <?php echo"$i";?></b></h1></div>
 		<div class="col-sm-6" style="background-color:rgb(75,75,75);color:white;"><img src="<?php echo $p; ?>" width="200" height="200" style="margin-left:40%;"></div>
 	</div>
	<br>

	<div class="row">
	
		<div class="col-sm-12"><img src="<?php echo $s; ?>" width="200" height="60" style="margin-left:70%;"></div>
	
	</div>
	<br><br><br>

	<div class="row">
 		<div class="col-sm-12" style="margin-left:1%;"><strong><h1 style="text-align:left;"><span class="badge badge-danger">Personal Information</span></h1></strong></div></div><br>

 	<div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-3" style="background-color:rgb(75,75,75);color:white;"><h5><b>First Name : </b></h5></div>
		<div class="col-sm-3" ><h5><b><?php echo"$row[fname]";?></b></h5></div>
		<div class="col-sm-3" style="background-color:rgb(75,75,75);color:white;"><h5><b>Last Name : </b></h5></div>
		<div class="col-sm-3"><h5><b><?php echo "$row[lname]";?></b></h5></div>
	</div><br>
	 	
	<div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-3" style="background-color:rgb(75,75,75);color:white;"><h5><b>Father's Name : </b></h5></div>
		<div class="col-sm-3" ><h5><b><?php echo"$row[father]";?></b></h5></div>
		<div class="col-sm-3" style="background-color:rgb(75,75,75);color:white;"><h5><b>Mother's Name : </b></h5></div>
		<div class="col-sm-3"><h5><b><?php echo "$row[mother]";?></b></h5></div>
	</div><br>

	<div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>E-MailID : </b></h5></div>
		<div class="col-sm-5" ><h5><b><?php echo"$row[email]";?></b></h5></div>
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Mobile No- : </b></h5></div>
		<div class="col-sm-3"><h5><b><?php echo "$row[mobileno]";?></b></h5></div>
	</div><br>

	<div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Gender: </b></h5></div>
		<div class="col-sm-2" ><h5><b><?php echo"$row[gender]";?></b></h5></div>
		<div class="col-sm-2" style="background-color:rgb(70,70,70);color:white;"><h5><b>Date Of Birth: </b></h5></div>
		<div class="col-sm-2"><h5><b><?php echo "$row[dob]";?></b></h5></div>
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Category: </b></h5></div>
		<div class="col-sm-2"><h5><b><?php echo "$row[caste]";?></b></h5></div>
	</div><br>

	<div class="row">
 		<div class="col-sm-12" style="margin-left:1%;"><strong><h1 style="text-align:left;"><span class="badge badge-danger">Address </span></h1></strong></div></div><br>

	<div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-3" style="background-color:rgb(75,75,75);color:white;"><h5><b>Distict:</b></h5></div>
		<div class="col-sm-3" ><h5><b><?php echo"$row[distict]";?></b></h5></div>
		<div class="col-sm-3" style="background-color:rgb(75,75,75);color:white;"><h5><b>Pincode :</b></h5></div>
		<div class="col-sm-3"><h5><b><?php echo "$row[pincode]";?></b></h5></div>
	</div><br>

	<div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Address:</b></h5></div>
		<div class="col-sm-6" ><h5><b><?php echo"$row[address]";?></b></h5></div>
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>State :</b></h5></div>
		<div class="col-sm-2"><h5><b><?php echo "$row[state]";?></b></h5></div>
	</div><br><br>

	<div class="row">
 		<div class="col-sm-12" style="margin-left:1%;"><strong><h1 style="text-align:left;"><span class="badge badge-danger ">Acadamic</span></h1></strong></div></div><br>
		 

	<table class="table table-striped">
    			<thead class="table-dark">
    				<tr>
    				<th>Qulification</th>
    				<th>Maximum Marks</th>
    				<th>Obtained Marks</th>
    				<th>Year Of Passing</th>
    				<th>Percentage</th>
    				</tr>
    			</thead>
    			<tbody class="table-striped">
    				<tr>
    				<td><h5><b><?php echo "$row[qualification]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[max]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[obtained]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[yop]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[per]" ?></b></h5></td>
    				</tr>
    			
    				<tr>
    				<td><h5><b><?php echo "$row[qualification2]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[max2]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[obtained2]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[yop2]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[per2]" ?></b></h5></td>
    				</tr>

    				<tr>
    				<td><h5><b><?php echo "$row[qualification3]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[max3]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[obtained3]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[yop3]" ?></b></h5></td>
    				<td><h5><b><?php echo "$row[per3]" ?></b></h5></td>
    				</tr>

    			</tbody>
    </table><br><br>

    <div class="row" style="border-style:outset; border-color: lightgray;">
		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Total Maximum:</b></h5></div>

		<div class="col-sm-1"><h5><b><?php $x="$row[max3]"+"$row[max2]"+"$row[max]";echo "$x";?></b></h5></div>

		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Tota Merit:</b></h5></div>

		<div class="col-sm-1"><h5><b><?php $y="$row[obtained3]"+"$row[obtained2]"+"$row[obtained]";echo "$y";?></b></h5></div>

		<div class="col-sm-2" style="background-color:rgb(75,75,75);color:white;"><h5><b>Tota Percentage:</b></h5></div>

		<div class="col-sm-4"><h5><b><?php  $p=($y*100)/$x;echo "$p % ";?></b></h5></div>
	</div><br><br><br>

    <div class="row">
    		
		<div class="col-sm-4">
    		<center><strong><h4 id="contactus"><b>Logout</b></h4></strong></center>
    		<center><a class="btn" href="login.php" style="margin:1%;"  ><img src="logout.ico"  width="100" height="100" class="rounded-circle"></a></strong></center></a>
   		</div>

    	<div class="col-sm-4">
    		<center><strong><h4 id="contactus"><b>Print</b></h4></strong></center>
    		<center><a  onclick="myFunction()" class="btn" style="margin:1%;"><img src="print.png"  width="100" height="100" class="rounded-circle"></a></strong></center></a>

    		<script>
			function myFunction() { window.print();}
			</script>
   		</div>

    	<div class="col-sm-4">
    		<center><strong><h4 id="contactus"><b>HelpLine</b></h4></strong></center>
    		<center><a class="btn" href="#" style="margin:1%;"  ><img src="help.jpg"  width="100" height="100" class="rounded-circle"></a></strong></center></a>
    
    	</div>

    </div>



 </div>
</body>
</html>