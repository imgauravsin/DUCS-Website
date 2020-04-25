 
<!DOCTYPE html>
<html>
<head>
	<title>New registration</title>
</head>
<body>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
	
	body{
		background-image: url(backgroundt.jpg);background-opacity:0.5; 
	}

</style>
	<img src="dulogo.jpg" class="rounded-circle" align="left" style="width:10%;height:10%";>
	<h3 class="alert alert-info text white" style="margin-left:10%;margin-top:2%;text-align:center;font-family: Montserrat, sans-serif;border-radius:70px;">
		<b><marquee>Welcome to Department of Computer Science</marquee></b></h3>
		<h5 class="alert alert-warning text white" style="margin-left:10%;margin-top:2%;text-align:center;border-radius:70px;">
		<marquee><span class="badge badge-warning"><b>Warning ! </b></span>Please ! Fill Below Information Very Carefully After Submitted the Appliaction Form not Allow Editing </marquee></h5>
		<br>
		<br>
		<br>
	<div class="alert alert-info" style="width:25%;margin-left:1%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-info">Personal Information</span></h1></strong></div>
	<div class="card-columns" style= "margin-left:1%; margin-right:1%; background:url(a1.jpg); padding:20px">
    
            
    <form action="personal.php" method="post" style="margin-left: 2%;margin-right: 2%; padding:5px;" enctype="multipart/form-data">

			<div class="form-group">
            <label style="color: white"><h5>First Name:</h5></label>
            <input type="text" class="form-control" name="fname">
          	</div>

          	<div class="form-group">
            <label style="color: white"><h5>Last Name:</h5></label>
            <input type="text" class="form-control" name="lname" >
          	</div>

          	<div class="form-group">
            <label style="color: white"><h5>Father's Name:</h5></label>
            <input type="text" class="form-control" name="father" >
        	</div>

        	<div class="form-group">
            <label style="color: white"><h5>Mother's Name:</h5></label>
            <input type="text" class="form-control" name="mother">
        	</div>

          	<div class="form-group">
            <label style="color: white"><h5>Email:</h5></label>
            <input type="text" class="form-control" name="email">
          	</div>

          	<div class="form-group">
            <label style="color: white"><h5>Password:</h5></label>
            <input type="password" class="form-control" name="password" >
          	</div>
          	


          	<div class="form-group">
            <label style="color: white"><h5>MobileNo:</h5></label>
            <input type="Number" class="form-control" name="mobileno" >
          	</div>

          	

  			<div class="form-group">
          	<label style="color: white"><h5> Category:</h5></label>
          	<select name="caste" class="custom-select" >
          		<option selected>Category</option>
    			<option value="Genral">Genral</option>
    			<option value="OBC">Other Backward Caste</option>
    			<option value="SC">Schedule Caste(SC)</option>
    			<option value="ST">Scheduled Tribes (ST)</option>
  		  	</select>
  			</div>

  			

  			 
          	<div class="form-group">
          	<label style="color: white"><h5> Gender:</h5></label>
          	<select name="gender" class="custom-select"  >
          		<option selected>Select Gender</option>
    			<option value="Male">Male</option>
    			<option value="Female">Female</option>
    			<option value="Other">Other</option>
  		  	</select>
  		  </div>

  		  	 
            
            <div class="form-group">
 			<label style="color: white"><h5>Date of Birth :</h5></label>
 			<input type="date" name="dob" max="3000-12-31" min="1000-01-01" class="form-control">
			</div>

			





		
			<div class="form-group" style="margin-left: 1%;">
            <label style="color: white;"><h5>Distict:</h5></label>
            <input type="text" class="form-control" name="distict"  >
          	</div>

          	<div class="form-group" style="margin-left: 1%;">
            <label style="color: white;"><h5>Pincode:</h5></label>
            <input type="Number" class="form-control" name="pincode"  >
          	</div>

          	<div class="form-group" style="margin-left: 1%;">
            <label style="color: white;"><h5>State:</h5></label>
            <select name="state" class="custom-select"  >
            	<option value="Null" selected="">Select State</option>
            	<option value="U.P">Utter Pradesh</option>
            	<option value="delhiNCR">Delhi NCR</option>
            	<option value="Other">Other</option>
            	

            </select>
          	</div>

          	 

          	<div class="form-group">
  			<label for="comment" style="color: white;"><h5>Address:</h5></label>
  			<textarea class="form-control" rows="5" cols="28" id="comment" name="address" ></textarea>
			</div>

    
	</div>

    <div class="alert alert-info" style="width:18%;margin:1%;padding:5px; text-align:center; border-radius:16px; background-image: url(backgroudt.jpg);"><strong><h1><span class="badge badge-info">Qualification</span></h1></strong></div>
    <div class="card" style= "margin-left:1%; margin-right:1%; background:url(a1.jpg); background-image-opacity:0;  padding:20px";>

    	
    		<table class="table table-light">
    			<thead class="table-dark"><tr>
    				<th>Qulification</th>
    				<th>Maximum Marks</th>
    				<th>Obtained Marks</th>
    				<th>Year Of Passing</th>
    				<th>Percentage</th></tr>
    				<tbody class="table-primary">
    					<tr >
 
    					<td>
    					<div class="form-group">
    					<select class="custom-select" name="qualification1">
  						<option value="Null" selected>Select</option>
  						<option value="Highschool">HighSchool</option>
  						<option value=Intermediate>Intermediate</option>
  						<option value="Bachler">Bachler</option>
  						</select>
  						</div>
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="max1"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="obtained1"   >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="yop1"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="per1"  >
          				</div>	
    					</td>
    					 
    						
    					</tr>

    					<tr>
    					<td>
    					<div class="form-group">
    					<select class="custom-select" name="qualification2">
  						<option value="Null" selected>Select</option>
  						<option value="Highschool">HighSchool</option>
  						<option value=Intermediate>Intermediate</option>
  						<option value="Bachler">Bachler</option>
  						</select>
  						</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="max2"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="obtained2"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="yop2"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="per2" >
          				</div>	
    					</td>
    					</tr>

    					<tr>
    					<td>
    					<div class="form-group">
    					<select class="custom-select" name="qualification3">
  						<option value="Null" selected>Select</option>
  						<option value="Highschool">HighSchool</option>
  						<option value=Intermediate>Intermediate</option>
  						<option value="Bachler">Bachler</option>
  						</select>
  						</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="max3"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="obtained3"  >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="yop3" >
          				</div>	
    					</td>

    					<td>
    					<div class="form-group" style="margin-left: 1%;">
             			<input type="Number" class="form-control" name="per3"  >
          				</div>	
    					</td>
    					</tr>

    				</tbody>
    			</thead>
    			
    		</table>
    	</div><br>

    	 <div class="row" style="background-image:url(a1.jpg); ">
		<div class="col-sm-1"><img src="dulogo.jpg" class="rounded-circle" width="100" height="100"></div>
		<div class="col-sm-11">
	
	<div class="alert alert-info" style="margin:1%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-info">Upload Documents</span></h1></strong></div></div></div>
	<br><br>

      
     
    <div class="row" style="border-style: inset;padding: 10px; border-color:white;background-image: url(a1.jpg);">
    <div class="col-sm-3"><div class="alert alert-info" style="margin-left:1%;padding:5px;margin-top:20%; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-danger">Passport Photo</span></h1></strong></div> </div>
    <div class="col-sm-3" style="padding: 30px;margin-top:2%;"><input type="file" name="banner_image1" ></div>
    <div class="col-sm-6" style="color: white;"><small><p>1.Allowed Photo Size – 3.5 cm x 4.5 cm</p>
<p>2.Size of file should be between 25kb-100 kb
<p>3.Ensure that the size of the scanned image is not more than 100KB. If the size of the
<p>4.file is more than 100 KB, then adjust the settings of the scanner such as the DPI resolution, no. of colours etc., during the process of scanning.
</p></small></div>
 
    </div><br><br>

    <div class="row" style="border-style: inset;padding: 10px;border-color:white; background-image: url(a1.jpg);">
    <div class="col-sm-3"><div class="alert alert-info" style="margin-left:1%;margin-top:20%;padding:5px; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-danger">Signature</span></h1></strong></div> </div>
    <div class="col-sm-3" style="padding: 30px;margin-top:2%;"><input type="file" name="banner_image2" ></div>
    <div class="col-sm-6" style="color: white;"><small><p>1.If the Applicant's signature on the answer script, at the time of the examination, doesnot match the signature on the Hall Ticket, the applicant will be disqualified.</p>
<p>2.Dimensions 3.5 cm x 1.5cm (preferred)</p>
<p>3.Size of file should be between ( 10KB – 50KB)</p>
<p>4.Ensure that the size of the scanned image is not more than 50KB</small></p></div>
 
    </div><br><br>

    <div class="row" style="border-style: inset;padding: 10px; border-color:white;background-image: url(a1.jpg);">
    <div class="col-sm-3"><div class="alert alert-info" style="margin-left:1%;padding:5px;margin-top:20%; text-align:center; border-radius:16px;"><strong><h1><span class="badge badge-danger">VoterID/AdharCard</span></h1></strong></div> </div>
    <div class="col-sm-3" style="padding: 30px;margin-top:2%;"><input type="file" name="banner_image3" ></div>
    <div class="col-sm-6"  style="color: white;"><small><p>1. There will be separate links for uploading certificates and documents such as educational
qualification certificates, experience certificate etc.</p>
 
<p>2.Your Online Application will not be registered unless you upload your photograph and
signature as specified.</p>

<p>3. Size of file should be between ( 100 KB – 500 KB)</p>
<p>4. Ensure that the size of the scanned image is not more than 500 KB</p></small></div>
 
    </div>
    <br><br>


    		 	
	
  		<button type="Submit" name="sub" class="btn btn-success btn-block" style="margin-left:2%;margin-right:4%;" ><span class="spinner-border spinner-border-sm"></span>Submit Your Application Form</button>

  		<button type="reset" class="btn btn-warning btn-block" style="margin-left:2%;margin-right:4%;"> <span class="spinner-border spinner-border-sm"></span>Reset</button>
		
    </form>
   </div>
  



</body>
</html>

 