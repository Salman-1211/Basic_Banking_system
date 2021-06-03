<?php
if(isset($_POST["csv_submit"]))
{
    include("connect.php");
    $flag = 0;
 $filename = explode(".",$_FILES["csv"]['name']);

if($filename[1]== 'csv'|| $filename[1]=='CSV')
{
  $handle = fopen($_FILES["csv"]['tmp_name'], 'r');  
  
  while($data = fgetcsv($handle))


{
    $qry = "INSERT INTO `user`( `name`, `mobile`, `email`, `credit`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";

    $result = mysqli_query($con,$qry);
    if($result)
    {
        $flag = 1;
    }
}
}
else
{
   ?> <script> alert("Please upload CSV File only");</script><? 
}
    if($flag==1)
    {
        ?> <script> alert("Data Upload Succesfully");</script><?php
    }
   /* else
    {
   
        ?> <script> alert("Failed to upload ");</script><?php
    }*/

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load CSV</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Upload File - <input type="file" name="csv">

        <input type ="submit" name="csv_submit" value="Upload">
    </form>
</body>
</html>