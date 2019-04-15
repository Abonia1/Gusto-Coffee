<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="big eats.css"/>
								<link rel="stylesheet" type="text/css" href="menu1.css"/>
				</head>
				
  <body>
				<?php
				include ('menu.php');
				?>
				
<div class="maindiv">
	<div class="leftdiv">
				<center><p class="leftdiv1">Combo offers</p></center>
							
    </div>
	<div class="rightdiv">
	<?php
	$con=mysqli_connect("localhost","root","aboabo","gustocoffee");
//mysqli_select_db("gustocoffee");
$x=mysqli_query($con,"select * from combo where menu_type='1'");
while($y=mysqli_fetch_array($x))
{
?>
				<div class="rightdiv1">
					<div class="rightdiv1a"><img src="<?php echo 'img/'.$y[3]; ?>" style="height:279px; width:279px; "></div>
					<div class="rightdiv1b"><center><p><?php echo $y[2]; ?>(&nbsp;<img src="IMAGES/download.png" style="height:11px; width:13px;"><?php echo $y[4]; ?>)</p></center></div>
				</div>
				
<?php
}
?>				
				
				
				
				
	</div>
</div>
				
							
</body>
</html>			