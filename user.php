<?php

include("connect.php");

$qry = "SELECT * FROM `user`";

$result = mysqli_query($con,$qry);


$i=1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/user.css" >
    <title>Dashboard</title>
    <style>
	body{
        background: url('images/img2.gif') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 100%
  height: auto;
		
	}
    #index{
		background-color:#FFC300;
	
	}
    .navbar-brand{
      margin-left: 20px;
      text-align: center;
    }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Homepage.php" style="font-family:Lucida Calligraphy">Home</a>
        <a class="navbar-brand" href="transferhistory.php" style="font-family:Lucida Calligraphy">Transcation History</a>
        
    </nav>
    <!-- navbar ends here  -->
<div class="container">
    <div class="row">
        <div class="col-md-9">

        <h1 style="color: #FF000C"><centre><b>User Details</b></centre></h1>

<table id="my_table3"class="table table-bordered table-hover ">
    <tr id="index">
    <th>Id</th>
    <th>Name</th>
    <th>Email </th>
    <th>Balance</th>
    <th>Operation</th>
    </tr>
   <?php while($data = mysqli_fetch_assoc($result))
    { ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["email"]; ?></td>
        <td><?php echo $data["credit"]; ?></td>
        <td> <a href="view.php?id=<?php echo $data['id']?>"> <button class="btn">Transfer</button></a><br></br>
        
    </tr>
    <?php } ?>
</table>
</div>
    </div>
    </div>
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">Made By Salman Mulani</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    

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