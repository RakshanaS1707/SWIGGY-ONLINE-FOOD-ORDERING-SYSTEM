<html>
<head>
<title>product</title>
</head>
<body background="https://wallpapercave.com/wp/wp3477365.jpg" style="background-repeat:no-repeat; background-position:center;background-size:cover;color:white"><center>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"display");
$query = "SELECT * FROM product";
$result=mysqli_query($connecto,$query);
$i=0;
?>
<table border="5" width="900" height="50px" >
<tr bgcolor="" height="50">
<th>PRODUCT NAME</th>
<th>PRICE</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{    
$a[$i]=$row["name"];
$b[$i]=$row["price"];
print("<tr><th><h2>$a[$i]</th>");
print("<th><h2>$b[$i]</th></tr>");
print("<br>");
$i=$i+1;
}
?>
</body>
</html>