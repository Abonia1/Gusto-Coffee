<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/style.css"/>
								<link rel="stylesheet" type="text/css" href="css/menu.css"/>
								<link rel="stylesheet" type="text/css" href="css/menu1.css"/>
								<link rel="stylesheet" type="text/css" href="css/EVENTS.css"/>
								<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
								<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
							
							
				</head>
				
				
		<body>
		
		<div class="menu">
            <ul class="one">
                <li class="li"><a style="text-decoration:none;color:#000000;"href="about us.php">Decouvrir</a></li>
                <li class="li"><a style="text-decoration:none;color:#000000;" href="reservation.php">Reservation</a></li>	
            </ul> 
            <div class="logo"><a href="index.php" ><img src="IMAGES/gusto_coffee.PNG" id="a"></a></div>
	   	    <ul class="second" style="text-align: right">
                <li class="li"><a style="text-decoration:none;color:#000000;" href="menu1.php">Services</a></li>
                <li class="li" style="margin-left:-15px;"><a style="text-decoration:none;color:#000000; " href="contact us.php">Contact</a></li>
                <li class="li" style="margin-left:-15px;"><a style="text-decoration:none;color:#000000; " href="admin/index.php">Login</a></li>
            </ul>
        </div>
        <div class="menumobile">
            <div class="logo" style="float:left;"><a href="index.php" ><img src="IMAGES/gusto_coffee.PNG" id="a"></a><p>Gusto Coffee</p></div>
            <div class="hamburger" style="float:left;"><button onclick="menuMobile();">MENU</button></div>
        </div>
        <div id="menuhamb" class="hamb">
                <ul>
                    <li class=""><a style="text-decoration:none;color:#000000;" href="about us.php">Decouvrir</a></li>
                    <li class=""><a style="text-decoration:none;color:#000000;" href="reservation.php">Reservation</a></li>	
                    <li class=""><a style="text-decoration:none;color:#000000;" href="menu1.php">Services</a></li>
                    <li class=""><a style="text-decoration:none;color:#000000;" href="contact us.php">Contact</a></li>
                    <li class=""><a style="text-decoration:none;color:#000000;" href="admin/index.php">Login</a></li>
                </ul>
            </div>
            <script>
            function menuMobile() {
                var p = document.getElementById("menuhamb");
                console.log(p);
                if (p.style.display == "block") {
                    p.style.display = "none";
                }
                else {
                    p.style.display = "block";
                }
            };
            </script>
</body>
</html>