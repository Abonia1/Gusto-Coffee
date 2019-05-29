<html>

<head>
    <title></title>
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


    <!-- <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.datetimepicker.js"></script> -->
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
        $(document).ready(function() {
            $('.timepick').timepicker({
                timeFormat: 'H:i',
                dropdown: true,
                scrollbar: true,
                minTime: '10:00',
                maxTime: '18:00',
            });
        });
    
    //try 1
    
    jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});



//to call show() function to display the plan image
function show() {
  //document.getElementById('planImg').style.maxHeight = "200px";
  document.getElementById('planImg').src="IMAGES/plan2.png";
  
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
    
        <div class="container" style="height:100%">


            <table  style="border-spacing: 40px;">
                <tr>
                    <td><label>Date</label>
                        <input type="text" id="datepicker" required="true" />
                    </td>

                    <td>
                        <label>Time</label>
                        <input class="timepick" style="position:relative"/>
                    </td>
                    <td style="padding-top:20px;">
                        <label>People</label>
                        <input type='button' value='-' class='qtyminus' field='quantity' />
    <input type='text' name='quantity' value='0' class='qty' />
    <input type='button' value='+' class='qtyplus' field='quantity' />
                        
                    </td>
                    <td></td>
                    <td>
                    <button class="button" onclick="show()">Check Availability</button>
</td>

                </tr>
            </table>
           
            <img id="planImg"">

        </div>
        
   
    <?php
    include('footer.php');
    ?>
</body>

</html>