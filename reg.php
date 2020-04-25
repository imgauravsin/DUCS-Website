 <!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	
	body{
		background-image: url(backgroundt.jpg);
	}

</style>
<body>
	<h3 class="alert alert-primary text white" style="margin-left:1%;margin-right:1%;"><b><blink>New Registration 2019</blink></b></h3>
	 <div class="alert alert-warning" style="width:30%;margin-left:1%;"><strong>Warning ! </strong>Fill All Information Carefully</div>
<div class="card-columns" style= "margin-left:1%; margin-right:1%; background:url(a1.jpg);">
    <div class="card-body">
      <h3 class="card-title" style="text-align: center;"></h3>
     
      <form action="server.php" method="post">
          <div class="form-group">
            <label style="color: white"><h5>First Name:</h5></label>
            <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required="*Fill This Field">
          </div>

          <div class="form-group">
            <label style="color: white"><h5>Last Name:</h5></label>
            <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required="*Fill This Field">
          </div>
          <br>
          <div class="form-group">
            <label style="color: white"><h5>Email:</h5></label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email" required="*Fill This Field">
          </div>

          <div class="form-group">
            <label style="color: white"><h5>MobileNo:</h5></label>
            <input type="Number" class="form-control" name="mobileno" placeholder="Enter Your Mobile Number">
          </div>
          <br>
          <div class="form-group">
            <label style="color: white"><h5>Password:</h5></label>
            <input type="Password" class="form-control" name="password" placeholder="Enter password" required="*Fill This Field">
          </div>
       
          <div class="form-group" style="color: white">
            
			<input type="checkbox" name="r" value="Remember Me"> Remember Me          </div>

          
          <button class="btn btn-primary" name="register-btn">
            <span class="spinner-border spinner-border-sm"></span>
            Submit
          </button>
          	 
  
          <button type="reset" class="btn btn-warning">Reset</button>
          

      </form>

    </div>
</div>

 
</body>
</html> 