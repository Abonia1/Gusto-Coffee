<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
        <link rel="stylesheet" type="text/css" href="css/reservation.css" />
        <script src="jquery.js"></script>
        <script src="jquery-ui.js"></script>
        <link rel="stylesheet" href="jquery-ui.css">
        <script type="text/javascript" src="js/reservation.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/timepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.1/jquery.timepicker.min.css"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.1/jquery.timepicker.min.js"></script>
        <?php
include_once 'dbConfig.php';
        ?>
    </head>
    <body>
        <?php
include('menu.php');
        ?>
        <div class="container" style="width:100%;height:50%">
            <table style="border-spacing: 40px;">
                <tr>
                    <td>
                        <label>Date</label>
                        <input type="text" name='Date' onchange="myChangeFunction(this)" id="datepicker" required="true" />
                    </td>
                    <td>
                        <label>Time</label>
                        <input type="text" class="time ui-timepicker-input" name='Time' onchange="myChangeFunction1(this)"
                        id="timepicker" style="position:relative" />
                    </td>
                    <td style="padding-top:20px;">
                        <label>People</label>
                        <input type='button' value='-' class='qtyminus' field='quantity' />
                        <input type='text' name='quantity' value='0' id="quantity" class='qty' />
                        <input type='button' value='+' class='qtyplus' field='quantity' />
                    </td>
                    <td>
                    </td>
                    <td>
                        <button class="button"  onclick="show()">Check Availability</button>
                    </td>
                </tr>
            </table>
            <div id="Plan" style="width:100%;display:none;">
                <div style="width:50%;float:left;margin:280 auto">
                    <?php
$con=mysqli_connect("localhost","root","","gustocoffee");
//mysqli_select_db("gustocoffee");
$x=mysqli_query($con,"SELECT seat_image FROM `seat` WHERE `seat_availability`=0");
while($y=mysqli_fetch_array($x) )
{
                    ?>
                    <img id="numberImg" class='unselected' src="
<?php echo $y[0]; ?>">
                    <?php
}
                    ?>
                </div>
                <div style="width:50%;float:right">
                    <img class="image" id="planImg" src="IMAGES/plan.svg">
                </div>
            </div>
        </div>
        <div class='container'>
            <form name="RegForm" id="regform"  action="reserveForm.php" onsubmit="return GEEKFORGEEKS()" method="post">
                <p>
                    Date:
                    <br>
                    <input type="text" size=65 name="DateForm" id="DateForm" />
                </p>
                <br>
                <p>
                    Time:
                    <br>
                    <input type="text" size=65 name="TimeForm" id="TimeForm" />
                </p>
                <br>
                <p>
                    People:
                    <br>
                    <input type="text" size=65 name="quantity">
                </p>
                <br>
                <p>
                    Name:
                    <br>
                    <input type="text" size=65 name="Name">
                </p>
                <br>
                <p>
                    Address:
                    <br>
                    <input type="text" size=65 name="Address">
                </p>
                <br>
                <p>
                    E-mail Address:
                    <br>
                    <input type="text" size=65 name="EMail">
                </p>
                <br>
                <p>
                    Telephone:
                    <br>
                    <input type="text" size=65 name="Telephone">
                </p>
                <br>
                <p>
                    Comments:
                    <br>
                    <textarea cols="55" name="Comment">  </textarea>
                </p>
                <p>
                    <input class='SubmitButton' type="Submit" value="Reserve" name="Submit">
                    <input class='SubmitButton' type="reset" value="Reset" name="Reset">
                </p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/reservation.js"></script>
</body>
<?php
include('footer.php');
?>
</html>