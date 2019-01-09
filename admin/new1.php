<?php

$a=$_POST['a'];
$b=$_POST['b'];

$c=$_POST['c'];

$con=mysqli_connect("localhost","root","","gustocoffee");
//mysqli_select_db("gustocoffee");
mysqli_query($con,"INSERT INTO  `gustocoffee`.`user` (`id` ,`name` ,`user` ,`pwd`)VALUES (NULL ,  '$a',  '$b',  '$c');");
header("location:index.php");





?>