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
  document.getElementById('planImg').src="IMAGES/plan2.PNG";
  
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
           
            <img id="planImg">
            
            <div class="map" id="map">
                <div class="map__image">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 571 620" style="enable-background:new 0 0 571 620;" xml:space="preserve">
                        <g>
                        <image style="overflow:visible;enable-background:new;" width="587" height="637" id="svg_1" xlink:href="IMAGES/plan2.PNG" transform="matrix(0.9438 0 0 0.9438 6 40.4055)"></image>
                        <g>
                        <title>Table 1</title>
                        <rect id="svg_2" x="34" y="142.5" class="st3" width="33" height="30"/>
                        <text id="svg_5" transform="matrix(1 0 0 1 43 166.5)" class="st4 st5">1</text>
                        </g>
                        <g>
                        <rect id="svg_6" x="125" y="186.5" class="st3" width="33" height="30"/>
                        <text id="svg_7" transform="matrix(1 0 0 1 134 210.5)" class="st4 st5">5</text>
                        </g>
                        <g>
                        <rect id="svg_11" x="209" y="227.5" class="st3" width="33" height="30"/>
                        <text id="svg_12" transform="matrix(1 0 0 1 218 251.5)" class="st4 st5">8</text>
                        </g>
                        <g>
                        <rect id="svg_13" x="299" y="278.5" class="st3" width="33" height="30"/>
                        <text id="svg_14" transform="matrix(1 0 0 1 301 302.5)" class="st4 st5">10</text>
                        </g>
                        <g>
                        <rect id="svg_15" x="208" y="322.5" class="st3" width="33" height="30"/>
                        <text id="svg_16" transform="matrix(1 0 0 1 217 346.5)" class="st4 st5">9</text>
                        </g>
                        <g>
                        <rect id="svg_17" x="122" y="283.5" class="st3" width="33" height="30"/>
                        <text id="svg_18" transform="matrix(1 0 0 1 131 307.5)" class="st4 st5">6</text>
                        </g>
                        <g>
                        <rect id="svg_19" x="33" y="230.5" class="st3" width="33" height="30"/>
                        <text id="svg_20" transform="matrix(1 0 0 1 42 254.5)" class="st4 st5">2</text>
                        </g>
                        <g>
                        <rect id="svg_21" x="34" y="327.5" class="st3" width="33" height="30"/>
                        <text id="svg_22" transform="matrix(1 0 0 1 43 351.5)" class="st4 st5">3</text>
                        </g>
                        <g>
                        <rect id="svg_23" x="123" y="372.5" class="st3" width="33" height="30"/>
                        <text id="svg_24" transform="matrix(1 0 0 1 132 396.5)" class="st4 st5">7</text>
                        </g>
                        <g>
                        <rect id="svg_25" x="70" y="540.5" class="st3" width="33" height="30"/>
                        <text id="svg_26" transform="matrix(1 0 0 1 73 564.5)" class="st4 st5">11</text>
                        </g>
                        <g>
                        <rect id="svg_27" x="462" y="355.5" class="st3" width="33" height="30"/>
                        <text id="svg_28" transform="matrix(1 0 0 1 465 379.5)" class="st4 st5">15</text>
                        </g>
                        <g>
                        <rect id="svg_29" x="465" y="464.5" class="st3" width="33" height="30"/>
                        <text id="svg_30" transform="matrix(1 0 0 1 468 488.5)" class="st4 st5">16</text>
                        </g>
                        <g>
                        <rect id="svg_31" x="465" y="569.5" class="st3" width="33" height="30"/>
                        <text id="svg_32" transform="matrix(1 0 0 1 467 593.5)" class="st4 st5">17</text>
                        </g>
                        <g>
                        <rect id="svg_33" x="496" y="203.5" class="st3" width="33" height="30"/>
                        <text id="svg_34" transform="matrix(1 0 0 1 498 227.5)" class="st4 st5">14</text>
                        </g>
                        <g>
                        <rect id="svg_35" x="391" y="158.5" class="st3" width="33" height="30"/>
                        <text id="svg_36" transform="matrix(1 0 0 1 394 182.5)" class="st4 st5">13</text>
                        </g>
                        <g>
                        <rect id="svg_37" x="495" y="93.5" class="st3" width="33" height="30"/>
                        <text id="svg_38" transform="matrix(1 0 0 1 497 117.5)" class="st4 st5">12</text>
                        </g>
                        <g>
                        <rect id="svg_39" x="110" y="90.5" class="st3" width="33" height="30"/>
                        <text id="svg_40" transform="matrix(1 0 0 1 114 114.5)" class="st4 st5">21</text>
                        </g>
                        <g>
                        <rect id="svg_41" x="73" y="81.5" class="st3" width="33" height="30"/>
                        <text id="svg_42" transform="matrix(1 0 0 1 76 105.5)" class="st4 st5">20</text>
                        </g>
                        <g>
                        <rect id="svg_43" x="37" y="69.5" class="st3" width="33" height="30"/>
                        <text id="svg_44" transform="matrix(1 0 0 1 40 93.5)" class="st4 st5">19</text>
                        </g>
                        <g>
                        <rect id="svg_45" x="2" y="63.5" class="st3" width="33" height="30"/>
                        <text id="svg_46" transform="matrix(1 0 0 1 4 87.5)" class="st4 st5">18</text>
                        </g>
                        <g>
                        <rect id="svg_47" x="146" y="100.5" class="st3" width="33" height="30"/>
                        <text id="svg_48" transform="matrix(1 0 0 1 149 124.5)" class="st4 st5">22</text>
                        </g>
                        <g>
                        <rect id="svg_49" x="33" y="417.5" class="st3" width="33" height="30"/>
                        <text id="svg_50" transform="matrix(1 0 0 1 42 441.5)" class="st4 st5">4</text>
                        </g>
                    </g>
                    </svg>
                </div>
                <div class="map__list">
                    
                </div>
            </div>
        </div>
        
   
    <?php
    include('footer.php');
    ?>
</body>

</html>