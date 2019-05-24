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
    <title>jQuery UI Datepicker - Default functionality</title>
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
            $('.txt').timepicker();
        });
    </script>

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
        <form action="thankyou.php" method="post">

            <div class="col-md-6" style="width:50%;">
                <label>Date</label>
                <input type="text" id="datepicker" required="true">
            </div>
            <div class="col-md-6" style="width:50%;float:right">
                <label>Time</label>
                <input class="txt">
                <svg width="50%" height="80%">
                    <rect x="50" y="20" rx="20" ry="20" width="50%" height="80%" style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
                </svg>
            </div>





    </div>




    <?php
    include('footer.php');
    ?>



</body>

</html>