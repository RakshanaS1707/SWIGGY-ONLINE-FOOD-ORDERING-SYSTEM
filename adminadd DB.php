<html>
<head>
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"admin");
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect***';
}
else
{
	echo 'Connection to db - Success...';
}
// Get the submitted form control data values 
$id=$_GET['hid'];
$hotelname = $_GET['hname'];
$item1=$_GET['i1'];
$price1=$_GET['p1'];
$item2=$_GET['i2'];
$price2=$_GET['p2'];
$item3=$_GET['i3'];
$price3=$_GET['p3'];
$item4=$_GET['i4'];
$price4=$_GET['p4'];
$item5=$_GET['i5'];
$price5=$_GET['p5'];
$item6=$_GET['i6'];
$price6=$_GET['p6'];
$item7=$_GET['i7'];
$price7=$_GET['p7'];
$sql="INSERT INTO allpdts (id,hname,item1,price1,item2,price2,item3,price3,item4,price4,item5,price5,item6,price6,item7,price7) VALUES ('$id','$hotelname','$item1','$price1','$item2','$price2','$item3','$price3','$item4','$price4','$item5','$price5','$item6','$price6','$item7','$price7')";
if (mysqli_query($connect,$sql))
  Header("Location:adminlogout.php");
else
  echo("not update");
mysqli_close($connect)
?>
</body>
</html>