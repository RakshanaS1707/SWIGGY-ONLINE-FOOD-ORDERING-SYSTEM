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
// Get the submitted form control data values 
$email=$_GET['mail'];
$query = "SELECT * FROM sign WHERE email" . $email;
$res = mysqli_query($connect,$query);
if (mysqli_query($connect,$query))
    header("Location:about us.php");
else
	echo "signup failed ";
mysqli_close($connect)
?>
</body>
</html>