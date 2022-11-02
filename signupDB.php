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
$email=$_GET['email'];
$query = "SELECT*FROM sign WHERE email='$email'";
$res = mysqli_query($connect,$query);
if (mysqli_query($connect,$query))
  Header("Location:about us.php"); 
mysqli_close($connect);
?>
</body>
</html>