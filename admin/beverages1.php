<?php
$con=mysqli_connect("localhost","root","","gustocoffee");
//mysqli_select_db("gustocoffee");
$a=$_POST['menutype'];
$b=$_POST['product'];
$d=$_FILES['image']['tmp_name'];
$e='../img/'.$_FILES['image']['name'];
$g=$_FILES['image']['name'];
$f=$_POST['price'];

move_uploaded_file($d,$e);

//mysqli_query($con,"INSERT INTO `beverages` (`b_id` ,`menu_type` ,`product` ,`image`,`price`)VALUES ('',  '$a',  '$b',  '$g','$f')");

$stmt = mysqli_prepare($con, "INSERT INTO  `beverages` (`menu_type` ,`product` ,`image`,`price`) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'ssss', $a, $b, $g, $f);
mysqli_stmt_execute($stmt);

?>

<img src="<?php echo  $e;?>" />