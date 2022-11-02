<html>
<head>
<title>MENU</title>
</head>
<body>
<body background="https://i.pinimg.com/originals/99/b0/b3/99b0b307a58e6d45e68bce7ff02f9b4b.jpg"style="background-repeat:no-repeat; background-position:center;background-size:cover;color:white"><center>
<table border="1"><tr>
<img src="https://www.jubilantfoodworks.com/images/brand_pic3.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://static.toiimg.com/thumb/53110049.cms?width=1200&height=900"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://www.allthingssupplychain.com/wp-content/uploads/2020/03/GettyImages-505266996-1170x875.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://i1.sndcdn.com/artworks-000488537481-1otjec-t500x500.jpg"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://2.bp.blogspot.com/-rO9S3rKIIX4/WVokKoqBolI/AAAAAAAACJs/s7uXY9D-R-wdWB5B-mD6L7x67cBsvUAmQCLcBGAs/s1600/IMG_0696.PNG"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://www.dominos.co.nz/ManagedAssets/NZ/product/S00008/NZ_S00008_en_hero_4181.jpg?v1752672348"align="center-left"width="150px"height="130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"display");
$query = "SELECT * FROM product2";
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
?><table><br><br><br>
<br><br><button type="button"><a href="frames2.html" target="frames2">BACK</a></button>
<tr><button type="button"><a href="quantity dominos.php" target="frames2">ORDER</a></button></tr>
</body>
</html>