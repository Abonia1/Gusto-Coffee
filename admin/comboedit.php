<html>
<body>
<?php
$con=mysqli_connect("localhost","root","aboabo","gustocoffee");
//mysqli_select_db("gustocoffee");
$a=$_GET['preeti']; 
$x=mysqli_query($con,"SELECT * FROM `combo` WHERE `c_id`='$a'");
while($y=mysqli_fetch_array($x) )
{
?>
<form action="" method="get">
<input type="text" value="<?php echo $y[0]; ?>" name="a" />
<input type="text" value="<?php echo $y[1]; ?>" name="b" />
<input type="text" value="<?php echo $y[2]; ?>" name="c" />
<input type="text" value="<?php echo $y[3]; ?>" name="d" />
<input type="text" value="<?php echo $y[4]; ?>" name="e" />
<input type="submit" value="submit" />
</form>
<?php
}
?>
</body>
</html>
