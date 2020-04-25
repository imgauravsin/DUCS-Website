<!DOCTYPE html>
<html lang="en">
<head>
      <title>DUCS</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

     body{
           background:url(backgroundt.jpg);
          }
       
</style>

<body>
      <div class="jumbotron text-center" style="height:220px;margin-top:4%;background-image: url(a1.jpg);  color: white;">
          <img src="dulogo.jpg" class="rounded-circle" align="left">
          <h1 style="text-align:right;"><strong>Department of Computer Science</strong></h1>
          <h5 style="text-align: right">The University Of Delhi</h5>
          <a type="button" class="btn btn-info btn-lg" href="mainpage.php" style="margin-right: 1%;" active>Home</button>
          <a type="button" class="btn btn-info btn-lg"  href="insert.php" style="margin-right: .5%;" >Registration<span class="badge badge-warning"><small>New</small></span></a>
          <a type="button" class="btn btn-info btn-lg" href="#user" style="margin-right: .5%;">User Login</a>
          <a type="button" class="btn btn-info btn-lg" href="#"style="margin-right: .5%;">Activity</a>
          <a type="button" class="btn btn-info btn-lg" href="#" style="margin-right: .5%;">Gallary</a>
          <a type="button" class="btn btn-info btn-lg" href="#" style="margin-right: .5%;">Examination</a>
          <a type="button" class="btn btn-info btn-lg" href="#" style="margin-right: .5%;">Event</a>
          <a type="button" class="btn btn-info btn-lg" href="#contactus" style="margin-right: .5%;">Contact Us</a>
 
      </div><br><br>


      <div class="row">
          <div class="col-sm-10">
          <h3><p class="badge badge-primary" style="margin-left:1%; width: 100%"><marquee><img src="wel.gif" width="60" height="30">Welcome to the Department of Computer Science at University of Delhi <img src="wel1.gif" width="60" height="30"></marquee></p></h3></div>
          <div class="col-sm-2">
            
          <p class="badge badge-info" style="margin-left:1%;margin-right:30%;text-align: center;">Time :<?php
          date_default_timezone_set("Asia/Bangkok");
          echo " ". date("h:i:sa");?></p>
          </div>  
      </div>




    <div class="row" style=" margin-left:1%;margin-right:1%;margin-bottom:1%">
          <div class="col-sm-8" style="background-color:lavender;padding:10px;">
              <div id="demo" class="carousel slide" data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
          <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="f1.png" alt="Los Angeles" width="900" height="450">
              <div class="carousel-caption">
                <h3>Building</h3>
                <p>Department Of Computer Science</p>
              </div>   
              </div>

              <div class="carousel-item">
              <img src="f2.jpg" alt="Frontview" width="900" height="450">
              <div class="carousel-caption">
                <h3>Front View</h3>
                <p>Department Of Computer Science</p>
              </div>   
              </div>

            <div class="carousel-item">
            <img src="b4.jpg" alt="Frontview" width="900" height="450">
            <div class="carousel-caption">
              <h3>LaundeyLapade 1.0</h3>
              <p>Department Of Computer Science1</p>
            </div>   
            </div>

          <div class="carousel-item">
          <img src="b7.jpg" alt="Frontview" width="900" height="450">
          <div class="carousel-caption">
            <h3>LaudeyLapade 2.0</h3>
            <p>Sankalan'19</p>
          </div>   
          </div>

          <div class="carousel-item">
          <img src="b6.jpg" alt="Frontview" width="900" height="450">
          <div class="carousel-caption">
            <h3>DJ Night</h3>
            <p>Sankalan'19</p>
          </div>   
          </div>

        <div class="carousel-item">
        <img src="b3.jpg" alt="Faclity" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Bonds</h3>
          <p>Student-Teacher Bonding!</p>
        </div>   
      </div>
  </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>

  </div>
  </div>

    <div class="col-sm-4" style="background-color:lavenderblush;">
      <div class="card" style="margin-top: 2%;margin-bottom: 2%;background-image: url(u1.jpg);" >
        <div class="card-title"><center><p class="badge badge-success" style="text-align: center;font-size: 22px;">User Login</p></center></div>
        <div class="card-body">
          <form action="userac.php" method="post"> 
              <div class="form-group">
              <label id="user"><h5>Email-ID/UserID:</h5></label>
              <input type="text" class="form-control" name="userid" placeholder="Enter Registered Email" required>
              </div>

              <div class="form-group">
              <label class="form-group"><h5>Password:</h5></label>
              <input type="password" class="form-control" name="pass" placeholder="Enter Your Password" required>
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
        </div>

      </div>
      </div>

</div>

  <h3><p class="badge badge-info" style="margin-left:1%;margin-right:1%; width: 98%;"><b><marquee direction="right"><img src="mario.gif" width="60" height="60"><a href="insert.php" style="color: white;">New Registration 2019</a><span class="badge badge-danger">New</span><img src="mario.gif" width="60" height="60">
  </marquee></b></p></h3>

  <div class="row" style=" margin-left:1%;margin-right:1%;margin-bottom:1%">
      <div class="col-sm-8" style="background-color:lavender; padding: 50px;background-image: url(t1.jpg);">
        <center><p class="badge badge-success" style="font-size:20px;color: white;">Department Brochure</p></center>

        <p>The Department of Computer Science was established in the year 1981 with the objective of imparting quality education in the field of Computer Science. The Department has modern facilities for teaching, learning and research. The Department offers a wide array of research opportunities and programs of study at undergraduate and postgraduate level.</p>
        <p>The Department started 3-year Master of Computer Applications (MCA) programme in the year 1982, which was among the first such programmes in India. 
        The Department started 2-year M.Sc. Computer Science programme in the year 2004 with the aim to develop core competence in Computer Science and prepare the students to carry out development work, as well as take up challenges in research</p>
        <p>Besides these, the Department offers Doctor of Philosophy (Ph.D.) in Computer Science aimed at producing quality researchers and high-impact interdisciplinary research. 
        Undergraduate CBCS programmes - B.Sc. (H) Computer Science, B.Sc. Physical / Mathematical Sciences and B.A. Programme (Discipline Courses in Computer Applications) are offered by the University of Delhi through its constituent colleges.</p>
      </div>

    <div class="col-sm-4" style="background-color:lavenderblush;">
      <div class="card" style="margin-top: 1%;height: 99%;">
      <div class="card-title"><center><p class="badge badge-success" style="font-size: 20px;margin-top: 10%;color: white;">Notics</p></center></div>
        <marquee direction="up">
        <div class="card-body">

          <ul class="list-group">
            <li type="square">Applications are invited for the appointment of Assistant Professors on Ad-hoc basis in the Department of Computer Science and constituent Colleges of University of Delhi (2019-2020) </li>
            <li type="square">Workshop on Curriculum and Assessment Methods at UG and PG levels</li>
            <li type="square">Admission to Ph.D.(CS) Prog for Second Round of Academic Year 2018-19</li>
            <li type="square">Workshop on Cyber Security and Cyber Laws (March 25-26, 2019)</li>
             <li type="square">This is Mine</li>

          </ul>
          </div>
        </marquee>

        </div>
      </div>
</div>

<div class="badge badge-primary" style="margin:1%;border:2px;border-color:white; width:100%;"> 
  <div class="row" >
      <div class="col-sm-3">
      <center  style="color: white;"><h4><p class=" badge badge-danger">Userful Links</p></h4></center>
      <center><a class="btn" href="#" style="margin:1%;" data-toggle="collapse" data-target="#demo"><img src="u4.gif"  width="100" height="100" class="rounded-circle"></a>
      <div id="demo" class="collapse" style="color: white;"><strong>
      
      <p>The University Of Delhi</p>
      <p>UGC</p>
      <p>DST-FIST, ICSSR</p>
      <p>SAP, CAS, DBT</p>
      <p>RTI</p>
      
      </strong></center>
      </div>


    <div class="col-sm-3">
    <center style="color: white;"><h4><p class="badge badge-danger">Quick Links</p></h4></center>
    <center><a class="btn" href="#" style="margin:1%;" data-toggle="collapse" data-target="#q"><img src="u1.gif"  width="100" height="100" class="rounded-circle"></a>
    <div id="q" class="collapse" style="color: white;"><strong>
      
      <p>Downloads</p>
      <p><small>(Available on DU Intranet Only)</small></p>
      <p>WUS Health Centre<p>
      <p>DU Forms</p>
      <p>List of Holidays 2018</p>    
      
      </strong></center>
      </div>


    <div class="col-sm-3">
    <center style="color: white;"><h4><p class="badge badge-danger" id="contactus">Contact US</p></h4></center>
    <center><a class="btn" href="#" id="#contactus"style="margin:1%;" data-toggle="collapse" data-target="#call"><img src="u2.gif"  width="100" height="100" class="rounded-circle"></a>
    <div id="call" class="collapse" style="color: white;"><strong>
       <p>Department of Computer Science</p> 
        <p>1st Floor, New Academic Block </p>
        <p>University of Delhi</p> 
        <p> Delhi - 110007. India.</p>
        <p>+91-11-27667591, 27667059.</p>
        <p>Email- office@cs.du.ac.in</p>
        </strong></center>
        </div>



  <div class="col-sm-3">
  <center style="color: white;"><h4><p class="badge badge-danger">Map</p></h4></center>
  <center><a class="btn" href="https://www.google.com/maps/search/Delhi+University,+Department+of+Computer+Science/@28.689703,77.207129,16z?hl=en" style="margin:0;"><img src="u3.gif"  width="100" height="100" class="rounded-circle"></a>

      </strong></center>
      </div>


</div>
</div>


   
 




     
    
  
</div>
<br>

<footer  class="page-footer font-small blue" style="color: black; background-color:white">


  <div class="footer-copyright text-center py-3"><span><a href="#"><p class="badge badge-warning" style="color: white;">Top Page</p></a><br><h4>© 2019-20 Copyright:
    <a class="badge badge-success" href="http://cs.du.ac.in/"> www.du.cs.in</a></h4></span>
  </div>

</footer>

</body>
</html>
