<html>
<head>
<title>MENU</title>
<link rel= 'stylesheet' href='adminview.css' type='text/css'>
</head>
<table border="1">
<?php
$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"admin");
$query = "SELECT * FROM allpdts";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="5" width="900" height="50px" >
<tr bgcolor="" height="50">
<th>ID</th>
<th>HOTEL NAME</th>
<th>ITEM1</th>
<th>PRICE1</th>
<th>ITEM2</th>
<th>PRICE2</th>
<th>ITEM3</th>
<th>PRICE3</th>
<th>ITEM4</th>
<th>PRICE4</th>
<th>ITEM5</th>
<th>PRICE5</th>
<th>ITEM6</th>
<th>PRICE6</th>
<th>ITEM7</th>
<th>PRICE7</th>

<?php
while($row = mysqli_fetch_array($result))
{    
	$id=$row['id'];
	$hotelname=$row['hname'];
	$i1=$row['item1'];
	$p1=$row['price1'];
	$i2=$row['item2'];
	$p2=$row['price2'];
	$i3=$row['item3'];
	$p3=$row['price3'];
	$i4=$row['item4'];
	$p4=$row['price4'];
	$i5=$row['item5'];
    $p5=$row['price5'];
    $i6=$row['item6'];
    $p6=$row['price6'];
    $i7=$row['item7'];
    $p7=$row['price7'];
	print("<tr><th><h2>$id</th>");
    print("<th><h2>$hotelname</th>");
	print("<th><h2>$i1</th>");
    print("<th><h2>$p1</th>");
	print("<th><h2>$i2</th>");
    print("<th><h2>$p2</th>");
	print("<th><h2>$i3</th>");
    print("<th><h2>$p3</th>");
	print("<th><h2>$i4</th>");
    print("<th><h2>$p4</th>");
	print("<th><h2>$i5</th>");
    print("<th><h2>$p5</th>");
	print("<th><h2>$i6</th>");
    print("<th><h2>$p6</th>");
	print("<th><h2>$i7</th>");
    print("<th><h2>$p7</th></tr>");
    print("<br>");

}
?><table><br><br><br>
<tr><center><button type="button"><a href="addviewdel.php">LOGOUT</a></button></center></tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</body>
</html>
