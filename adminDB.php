<html>
<head>
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"allday");
// Get the submitted form control data values 
$id=$_GET['uname'];
$number=$_GET['num'];
$sql="INSERT INTO `customer(`name`, `number`) VALUES ('$id','$number')";
if (mysqli_query($connect,$sql))
      echo "data inserted sucessfully....";
else
     echo "failed...";
mysqli_close($connect)
?>
</body>
</html>