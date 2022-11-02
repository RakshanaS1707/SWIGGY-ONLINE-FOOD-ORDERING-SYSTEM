<html>
<body>
<?php
if(isset($_POST['submit'])){
$search = $_POST['search'];
// connect to database
$con= mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'product');
$sql = "SELECT * FROM products WHERE product_name='$search'";
$result = mysqli_query($connect,$sql);
$foundnum = mysqli_num_rows($result);

if($foundnum==0)
{
	echo '<h1>No results found</h1>';
}
else{
	echo "<h1><strong> $foundnum Result(s) found for \"".$search."\"</strong></h1>";
	$sql = "SELECT * FROM snacks WHERE product_name='$search'";
	$getquery = mysqli_query($con,$sql);
	while($runrows=mysqli_fetch_array($getquery))
	{
		echo"<h5 class='card-title'>Product Name: ". $runrows["product_name"]."</h5>";
		echo"<h5 class='card-title'>Price: Rs.". $runrows["product_price"]."</h5>";
		echo"----------------------------------------------------------------------------------";
	}
}
mysqli_close($connect);
	}
?>
</body>
</html>