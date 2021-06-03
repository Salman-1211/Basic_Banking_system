<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css" >
    <title>Banking System</title>
   <style>
    body { 
  background: url('images/home.gif') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 100%
  height: auto;
}
h1 {
	font-size: 52px;
	margin-top: -7px;
	margin-left:700px;
}

h2{
	margin-left: 800px;
	margin-top: 70px;
	font-size: 30px;
}
h4{
	font-size: 22px;
	margin-left: 700px;
	letter-spacing: 1px;
	color: #EE0986;
	text-shadow: 0px 1px;
}
.navbar-brand{
  margin-left: 100px
}
</style>  
</head>
<body>
<!-- navbar starts here  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Homepage.php" style="font-family:Lucida Calligraphy">Indian Bank</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <!--<a class="nav-link" href="Homepage.php">Home <span class="sr-only">(current)</span></a>-->
            </li>
          </ul>
        </div>
    </nav>
    <!-- navbar ends here  -->
<div class="container">
<div class="header">

<br>
<h2 style="font-family:Lucida Calligraphy">Welcome To</h2>
<h1><strong>Credit Management</strong></h1>
<h4 style="font-family:MV Boli"><b>Choose a user and transfer the credits <br>&nbsp;&nbsp;&nbsp;&nbsp; from one user to another user.<b></h4>
<form action="user.php">
<button class='btn' style="margin-left:700px">Get Started</button>
</form>
</div>

</div>   
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
</body>

</html>