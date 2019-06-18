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
    //$sql="INSERT INTO `reservation` (`reservation_id`, `date`, `time`, `quantity`, `name`, `email`, `telephone`, `adress`, `comment`) VALUES (``, `$a`, `$b`, `$c`, `$d`, `$e`, `$f`, `$g`, `$h`)";
    $stmt = mysqli_prepare($conn, "INSERT INTO `reservation` (`date`,`time`,`quantity`,`name`,`email`,`telephone`,`adress`,`comment`) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    mysqli_stmt_bind_param($stmt, 'ssississ', $a, $b, $c, $d, $e, $f, $g, $h);
    /* execute prepared statement */
    mysqli_stmt_execute($stmt);
    //printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));
    /* close statement and connection */
    mysqli_stmt_close($stmt);

    mysqli_close($conn);
 
}
include ('menu.php');
        ?>
        <div class="Reserve">
            <p style="font-family:Vladimir Script;font-size:38px;">
                Thank you 
                <?php echo $_POST["Name"]; ?> for reserving
                your seat in advance.See you Soon
            </p>
        </div>
        <?php
include ('footer.php');
        ?>
    </body>
</html>
