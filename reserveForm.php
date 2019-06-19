<html>

<head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/reservation.css" />
</head>

<body>
    <?php
$conn=mysqli_connect("localhost","root","","gustocoffee");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//mysqli_select_db("gustocoffee");
if(isset($_POST['Submit'])){
    $a=$_POST['DateForm'];
    $b=$_POST['TimeForm'];
    $c=$_POST['quantity'];
    $d=$_POST['Name'];
    $e=$_POST['EMail'];
    $f=$_POST['Telephone'];
    $g=$_POST['Address'];
    $h=$_POST['Comment'];
    $i=$_POST['ImgSrc'];

    $x= mysqli_query($conn,"SELECT `seat_id` from `seat` WHERE `seat_image`= '$i'");
    $y=mysqli_fetch_array($x);
    $z= $y[0];
    
  
    //$sql="INSERT INTO `reservation` (`reservation_id`, `date`, `time`, `quantity`, `name`, `email`, `telephone`, `adress`, `comment`) VALUES (``, `$a`, `$b`, `$c`, `$d`, `$e`, `$f`, `$g`, `$h`)";
    $stmt = mysqli_prepare($conn, "INSERT INTO `reservation` (`date`,`time`,`quantity`,`name`,`email`,`telephone`,`adress`,`comment`,`seat_id`) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)");
    mysqli_stmt_bind_param($stmt, 'ssississi', $a, $b, $c, $d, $e, $f, $g, $h, $z);
    /* execute prepared statement */
    mysqli_stmt_execute($stmt);
    /* close statement and connection */
    mysqli_stmt_close($stmt);

    $sql=mysqli_query ($conn,"UPDATE `seat` SET `seat_availability`= 1 WHERE `seat_image`= '$i'");
    // if(mysqli_query($conn, $sql)){
    //     echo "Records were updated successfully.";
    // } else {
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // }
    mysqli_close($conn);
 
}
include ('menu.php');
        ?>
    <div class="Reserve">
        <div class="container" id="ThankyouForm">
            Thank you
            <?php echo $_POST["Name"]; ?> for reserving
            your seat in advance.See you Soon
        </div>
    </div>
    <?php
include ('footer.php');
        ?>
</body>

</html>