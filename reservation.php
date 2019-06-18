<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
        <link rel="stylesheet" type="text/css" href="css/reservation.css" />
        <script src="jquery.js"></script>
        <script src="jquery-ui.js"></script>
        <link rel="stylesheet" href="jquery-ui.css">
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
        <!-- <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.datetimepicker.js"></script> -->
        <script>
            function GEEKFORGEEKS() {
                var name = document.forms["RegForm"]["Name"];
                var email = document.forms["RegForm"]["EMail"];
                var phone = document.forms["RegForm"]["Telephone"];
                var address = document.forms["RegForm"]["Address"];
                if (name.value == "") {
                    window.alert("Please enter your name.");
                    name.focus();
                    return false;
                }
                if (address.value == "") {
                    window.alert("Please enter your address.");
                    name.focus();
                    return false;
                }
                if (email.value == "") {
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
                if (email.value.indexOf("@", 0) < 0) {
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
                if (email.value.indexOf(".", 0) < 0) {
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
                if (phone.value == "") {
                    window.alert("Please enter your telephone number.");
                    phone.focus();
                    return false;
                }
                return true;
            }
        </script>
        <script>
            $(function() {
                $("#datepicker").datepicker({
                    dateFormat: "dd-mm-yy",
                    yearRange: "-100:+20",
                    minDate: '0'
                }
                                           );
            }
             );
            $(document).ready(function() {
                $('#timepicker').timepicker({
                    timeFormat: 'H:i',
                    dropdown: true,
                    scrollbar: true,
                    minTime: '10:00',
                    maxTime: '18:00',
                }
                                           );
                // $('#numberImg').click(function() {
                //     var $this = $(this);
                //     if ($this.hasClass('active')) {
                //         $this.removeClass('active');
                //     } else {
                //         $('.active').removeClass('active');
                //         $this.addClass('active');
                //     }
                // });
            }
                             );
            //Border change on clicking image
            $(document).ready(function() {
                // wait until all images are loaded
                $(window).on("load", function() {
                    $('img').click(function() {
                        if ($(this).hasClass("selected")) {
                            $(this).removeClass('selected').addClass('unselected');
                        }
                        else {
                            $(this).removeClass('unselected').addClass('selected');
                        }
                    }
                                  );
                }
                            );
            }
                             );
            //     //toogle class
            //     $('#numberImg').click(function() {
            //    if( $(this).hasClass('selected') ) {
            //         $(this).toggleClass(' unselected selected');
            //     }
            //     else{
            //          $(this).addClass('selected');
            //     }
            // });
            //try 1
            jQuery(document).ready(function() {
                // This button will increment the value
                $('.qtyplus').click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr('field');
                    // Get its current value
                    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                    // If is not undefined
                    if (!isNaN(currentVal)) {
                        // Increment
                        $('input[name=' + fieldName + ']').val(currentVal + 1);
                    }
                    else {
                        // Otherwise put a 0 there
                        $('input[name=' + fieldName + ']').val(0);
                    }
                }
                                   );
                // This button will decrement the value till 0
                $(".qtyminus").click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr('field');
                    // Get its current value
                    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                    // If it isn't undefined or its greater than 0
                    if (!isNaN(currentVal) && currentVal > 0) {
                        // Decrement one
                        $('input[name=' + fieldName + ']').val(currentVal - 1);
                    }
                    else {
                        // Otherwise put a 0 there
                        $('input[name=' + fieldName + ']').val(0);
                    }
                }
                                    );
            }
                                  );
            //to call show() function to display the plan image
            function show() {
                //document.getElementById('planImg').style.maxHeight = "200px";
                document.getElementById('planImg').background = "IMAGES/plan2.PNG";
            }
        </script>
        <!-- <script>
$(document).ready(function() {
var timepicker = new TimePicker('time', {
lang: 'en',
theme: 'dark'
});
timepicker.on('change', function(evt) {
var value = (evt.hour || '00' );
evt.element.value = value;
});
});
</script> -->
        <!-- <script>
$('#demo').datetimepicker({
inline:true,
});
</script>-->
    </head>
    <body>
        <?php
include('menu.php');
        ?>
        <div class="container">
            <table style="border-spacing: 40px;">
                <tr>
                    <td>
                        <label>Date</label>
                        <input type="text" name='Date' id="datepicker" required="true" />
                    </td>
                    <td>
                        <label>Time</label>
                        <input type="text" class="time ui-timepicker-input" name='Time' id="timepicker"
                        style="position:relative" />
                    </td>
                    <td style="padding-top:20px;">
                        <label>People</label>
                        <input type='button' value='-' class='qtyminus' field='quantity' />
                        <input type='text' name='quantity' value='0' class='qty' />
                        <input type='button' value='+' class='qtyplus' field='quantity' />
                    </td>
                    <td>
                    </td>
                    <td>
                        <button class="button" onclick="show()">Check Availability</button>
                    </td>
                </tr>
            </table>
            <div id="Plan" style="width:100%;">
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
            <form name="RegForm" action="reserveForm.php" onsubmit="return GEEKFORGEEKS()" method="post">
                <p>
                    Date: 
                    <br>
                    <input type="text" size=65 name="DateForm">
                </p>
                <br>
                <p>
                    Time: 
                    <br>
                    <input type="text" size=65 name="TimeForm">
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
</body>
<?php
include('footer.php');
?>
</html>