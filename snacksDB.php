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
$ = $_GET['name'];
$=$_GET['mail'];
$sql=";
if (mysqli_query($connect,$sql))
    echo "inserted...";

mysqli_close($connect)
?>
</body>
</html>