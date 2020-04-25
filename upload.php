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

	<div class="card" style="margin-top: 2%;margin-bottom: 2%;" >
        <div class="card-title"><p class="alert alert-success" style="text-align: center;"><strong><display1>User Login</display1></strong></p></div>
        <div class="card-body">
          <form action="img.php" method="post"> 
              <div class="form-group">
              <label id="user">Email-ID/UserID:</label>
              <input type="text" class="form-control" name="userid" placeholder="Enter Registered Email">
              </div>

              <div class="form-group">
              <label class="form-group">Password:</label>
              <input type="password" class="form-control" name="pass" placeholder="Enter Your Password">
              </div>

              <div class="form-group">
              <input type="checkbox" name="r" value="Remember Me">  Remember Me
              </div>

              <div class="form-group">
              <button type="submit"class="btn btn-primary">Login</button>
              </div>

              <div class="form-group">
              <a href="#">Forget Password ?</a>
              </div>
          </form>