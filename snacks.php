<html>
<head>
<title>MENU</title>
</head>
<body>
<body background="https://yesway.com/wp-content/uploads/2020/02/background-snacks-slide-300x133.jpg"style="background-repeat:no-repeat; background-position:center;background-size:cover;color:white"><center>
<table border="1"><tr>
<img src="https://i2.wp.com/www.snazzycuisine.com/wp-content/uploads/2019/12/Minced-chicken-cutlet-scaled.jpg"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Indian_cuisine-Chaat-Bhelpuri-03.jpg"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://static.toiimg.com/thumb/61048461.cms?imgsize=1981854&width=800&height=800"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://i.ytimg.com/vi/W14dhsll8oQ/maxresdefault.jpg"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://img.onmanorama.com/content/dam/mm/en/food/editors-pick/Indian%20Desserts/images/malai-kulfi.jpg"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://cdn.cancercenter.com/-/media/ctca/images/others/blogs/2019/01-january/01-blog-coffee-l.jpg"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=" https://thekaravaliwok.com/wp-content/uploads/2017/05/2017-05-06-15-43-20-e1494324672241.jpg"align="center-left"width="120px"height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"display");
$query = "SELECT * FROM product3";
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
<tr><button type="button"><a href="quantity snacks.php" target="frames2">ORDER</a></button></tr>
</body>
</html>