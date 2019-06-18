<html>
<body>
<html>
<head>
<title></title>
                         <link rel="stylesheet" type="text/css" href="css/welcome.css"/>
</head>


<body>

<div class="maindiv" >

<?php
$con=mysqli_connect("localhost","root","","gustocoffee");
//mysqli_select_db("gustocoffee");
$a=$_GET['preeti']; 
$x=mysqli_query($con,"SELECT * FROM `food` WHERE `f_id`='$a'");
while($y=mysqli_fetch_array($x) )
{
?>
<form action="updatefood.php" method="post">
<input type="hidden" value="<?php echo $y[0]; ?>" name="a" />
Product Name<input type="text" value="<?php echo $y[2]; ?>" name="c" />
Price<input type="text" value="<?php echo $y[4]; ?>" name="d" />

<input type="submit" value="submit" />
</form>
<?php
}
?>
</div>
</body>
</html>
