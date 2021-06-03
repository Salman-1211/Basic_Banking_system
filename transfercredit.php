
<?php

include ('connect.php');

if(isset($_POST['transfer']))
{
		
	function function_alert($errors) { 
    // Display the alert box  
    echo "<script>alert('$errors');"; 
	echo "window.location.href = 'user.php'";
	echo "</script>";
	}
	  
	session_start();
    $from_id = trim($_POST['fromtc']);
    $to_id = trim($_POST['touser']);
    $credits = trim($_POST['credit']);  
    $error = false;
	
	$from_query = "SELECT * FROM user WHERE id='$from_id'";
	$from_result = mysqli_query($con,$from_query);
	$row_from = mysqli_fetch_assoc($from_result);
	$from_name = $row_from['name'];
	
	$from_creditdb = $row_from['credit'];
	

	//Query for user to which credit is transfered
	$to_query = "SELECT * FROM user WHERE id='$to_id'";
	$to_result = mysqli_query($con,$to_query);
    $row_to = mysqli_fetch_assoc($to_result);
    $to_name = $row_to['name'];
	
	//to user credits
    $to_creditdb = $row_to['credit'];
	
	 if((int)$credits>(int)$from_creditdb)
    {
        $errors = "Insufficient Credits";
        $error = true; 
    }
	
	if(!$error)
    {
        $current_date = date("Y-m-d H:i:s");
		//from user credits update
        $userf_finalcredit = "UPDATE user SET ";
        $userf_finalcredit .= "credit = credit - $credits WHERE id=$from_id";
        $query = mysqli_query($con,$userf_finalcredit);
        
		if(!$query)
        {
            die("QUERY FAILED".mysqli_error($con));
			echo("Error description: " . $mysqli -> error);
        }
		
		//to user credit update
        $userto_finalcredit = "UPDATE user SET ";
        $userto_finalcredit .= "credit = credit + $credits WHERE id=$to_id";
        $query = mysqli_query($con,$userto_finalcredit);
	
		//insert into transcations table
        $query1 = "INSERT INTO transferrecord(From_User,To_User,CreditTransfered,DateTime) VALUES('$from_name','$to_name','$credits','$current_date')";
        $res2 = mysqli_query($con,$query1);
		
		
		if($res2){
			
			$user1 = "SELECT * FROM user WHERE id='$from_id' OR id='$to_id'";
			$res=mysqli_query($con,$user1);
			$row_count=mysqli_num_rows($res);
			
		}
		else{
				die("QUERY FAILED".mysqli_error($con));
				echo("Error description: " . $mysqli -> error);
		}
    }
	else{
		function_alert("Insufficient Credit Balance!!Please Try Again");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>
		Final User Result
    </title>
	<link type="text/css" rel="stylesheet" href="css/user.css" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	.nav-link{
      margin-left: 80px;
      text-align: center;
    }
	h1{
		font-size: 42px;
		margin-left: 290px;
		margin-top: 40px;
	}
	#my_table{
		margin-left: 400px;
		font-size: 20px;
		border-style: groove;
		border-collapse: collapse;
		background-color: #effbf7;
	}
	th{
		background-color:#00FF99;
	
	}
	th,td{
		padding: 15px;
	}
	.success-msg {
		margin: 10px 10px 10px 10px;
		padding: 10px;
		border-radius: 3px 3px 3px 3px;
		color: #270;
		background-color: #DFF2BF;
	}
li {
  float:right;
}
ul {
	list-style-type: none;
	margin: -9px;
	padding: 5px 5px;
	overflow: hidden;
	margin-top:13px;
	height: 50px;
margin-right: 400px;
}
	
li a {

  padding: 10px 10px;
color:#ffffff ;
  text-decoration: none;
  font-size:23px;
  letter-spacing: 1px;
}
li a:hover {
   color: #ff99cc;
}

	</style>
    </head>
	
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="nav-link " aria-current="page" href="Homepage.php" style="font-family:Lucida Calligraphy">Home</a>
  <a class="nav-link " aria-current="page" href="transferhistory.php" style="font-family:Lucida Calligraphy">Transcation History</a>
  
</nav>
    <!-- navbar ends here  -->

<!--notification Bar Start-->
<div class="container">
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
  Credit is Successfully Transfered. Check the details Below!!
  </div>
</div>

<!--notification Bar End-->
</div>		
        <h1>User Details After Credit Transfer</h1>
	<?php
		echo "<table id=\"my_table\" border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Final Credit</th>
		</tr>"; 
	?>
		
	<?php	while($data = mysqli_fetch_assoc($res))
		{?>
			<tr>
		<td><?php echo $data["id"] ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["email"]; ?></td>
        <td><?php echo $data["credit"]; ?></td>
        
    </tr>
	<?php } ?>
</table>
	
		
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
