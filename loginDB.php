<html>
<head>
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"signup");
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect***';
}
else
{
	echo 'Connection to db - Success...';
}
// Get the submitted form control data values 
$userid = $_GET['uname'];
$email=$_GET['email'];
$sql="INSERT INTO sign (name, email) VALUES ('$userid','$email')";
if (mysqli_query($connect,$sql))
    Header("Location:about us.php");
mysqli_close($connect)
?>
</body>
</html>