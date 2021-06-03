<?php 

include ("connect.php");


$qry = "SELECT * FROM `transferrecord`";

$result = mysqli_query($con,$qry);
?>

<html>
<head>
<title>Transfer History</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/view1.css" >
<style>
html { 
  background: url(images/img2.gif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	#my_table3{
		margin-left: 20px;
		font-size: 20px;
		font-color: black;
		width: 700px;
        border:black;
		border-style: groove;
		background-color: #effbf7;

	}
	#my_table3 tr:hover {background-color: #e7e7e7;}
	th{
		background-color:#00FF99;
	
	}
	th,td{
		padding: 11px;
		text-align: center;
	}

	footer{
        bottom: 0;
		width: 100%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: #fff;
		margin-left: -8px;
		height: 20px;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
		text-align: center;
    }
h1{
margin-left: 500px;
color:#e3fc03;
text-shadow: 0 0 3px #0303fc, 0 0 5px #0303fc;
}
.text-white{
	color:white;
}


.login-form img{
	width: 545px;
	height:300px;
	position:relative;
	margin-top:0px;
	margin-left: 35px;
}
.container1 .btn1 {
  position: absolute;
  margin-left: -90px;
  margin-top: 40px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:  #4CAF50;
  color:white;
  font-size: 20px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
}

.head{
	margin-left:400px;
}

#t1{
	color:black;
}
</style>
</head>
<body>
	
	 
	
	<div class="container1">
		<p align='right'>
	<button class='btn1' onclick="redirect()">Back</button>
	</p>
	<script>
	function redirect() {
		window.location.href = "user.php";
	}
	</script>
	<br>
<br>
	    <form method="GET">
		

		
		<div class="head">
			<h1 style="margin-left:200px;">Transfer History</h1>
			<table id="my_table3"class="table table-bordered table-hover ">
				<tr style="color:black;">
				<th>Id</th>
				<th>From User</th>
				<th>To User</th>
				<th>Credit Amount<br>Transfered</th>
				<th>Date & Time</th>
				</tr>

			<?php while($data = mysqli_fetch_array($result)) 
				{?>
				
				<tr id="t1">
					<td><?php echo $data["id"]; ?></td>
					<td><?php echo $data["From_User"]; ?></td>
					<td><?php echo $data["To_User"]; ?></td>
					<td><?php echo $data["CreditTransfered"]; ?></td>
					<td><?php echo $data["DateTime"]; ?></td>
				</tr>						
			<?php	}?>
		</table>
		</div>
	</div>
	</div>
	<br><br>
	 <!-- Footer -->
<footer class="bg-dark text-center text-white" style="text-align: center;">
    <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">Made By Salman Mulani</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

</html>