<html>
<head>
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"feed");

// Get the submitted form control data values 
$name = $_GET['a'];
$mail=$_GET['b'];
$feed=$_GET['c'];
$sql="INSERT INTO message (name, email,feedback) VALUES ('$name','$mail','$feed')";
if (mysqli_query($connect,$sql))
    Header("Location:thankyou.php");
mysqli_close($connect)
?>
</body>
</html>
