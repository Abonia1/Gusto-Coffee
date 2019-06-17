<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/menu.css"/>
								<link rel="stylesheet" type="text/css" href="css/projectcafe.css"/>
								<link rel="stylesheet" type="text/css" href="css/combo offers.css"/>
								<link rel="stylesheet" type="text/css" href="css/menu1.css"/>
								<link rel="stylesheet" type="text/css" href="css/beverages.css"/>


								<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
								<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 								<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
								<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


								<link rel="stylesheet" type="text/css" href="css/animate.css">
								<link href="css/style.css" rel="stylesheet" type="text/css">
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

				</head>
				
			   <body class="accueil">
				<?php
				include ('menu.php');
				?>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img id="carouselImg" src="IMAGES/gusto_house.png" alt="Gusto House">
      <div class="carousel-caption">
        <h3>Gusto Coffee</h3>
        <p>Bienvenue !</p>
      </div>
    </div>

    <div class="item">
      <img id="carouselImg" src="IMAGES/gusto_house2.png" alt="Gusto House">
      <div class="carousel-caption">
        <h3>Notre nouvelle Espace</h3>
        <p>Detendez vous avec un bon café</p>
      </div>
    </div>

    <div class="item">
      <img id="carouselImg" src="IMAGES/gusto_house.png" alt="Gusto House">
      <div class="carousel-caption">
<!--  <h3>Special Offers</h3> -->
        <input type="button" value="Découvrez nos services" onclick="location.href = 'menu1.php';" class="buttonslider"/>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>



			    <div class="snap"><center><img src="IMAGES/photo.png"  height="350px" width="1000px" border="3px" style="margin-top:20px;"></center>
				</div>
				<div class="line" >
					<center>La meilleur place pour ce detendre et travailler</center>
					
					</div>
					
					<div class="a" style="font-size:29px">
	<div class="a1"><img src="IMAGES/C4.PNG" class="img1"><p>Venez découvrir, vous ne voudrez plus jamais allez ailleurs !</p></div>
				<div class="a2"><img src="IMAGES/c5.PNG" class="img1"><p>Les meilleurs services que le co-working n'est jamais connu</p></div>
				</div>
				
		          
				  
				  <div class="offer" style="font-size:20px">
				  
				  <!-- <div class="grid" style="padding-top: 30px;">
<div class="row" style="padding-bottom:50px;">
    <div class="col-xs-4">
        
         <article class="caption">
        <img class="caption__media" src="IMAGES/c24.PNG" class="img-responsive" />
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Plateformes pétrolières</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>
    </div>
    <div class="col-xs-4">
      <article class="caption">
        <img class="caption__media" src="IMAGES/c25.PNG" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Cuisines industrielles</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>  
    </div>
    <div class="col-xs-4">
      <article class="caption">
        <img class="caption__media" src="IMAGES/c27.PNG" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title">Surfaces accueillant du public</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>  
    </div>
</div> -->
				  
					<div class="offer1">
					
					<div class="offer2"><h1><center><a style="text-decoration:none;color:#000000;" href="menu1.php">Nourritures</a></center></h1></div>
					<div class="offer3"><img src="IMAGES/c24.PNG" height="273" width="300"></div>
					</div>
					
					<div class="offer1">
					<div class="offer2"><h1><center><a style="text-decoration:none;color:#000000;" href="beverages.php">Boissons</a></center></h1></div>
					<div class="offer3"><img src="IMAGES/c25.PNG" height="276" width="300"></div>
					</div>
					
					
					
					<div class="offer1">
					<div class="offer2"><h1><center><a  style="text-decoration:none;color:#000000;" href="combo offers.php">Menus</a></center></h1></div>
					<div class="offer3"><img src="IMAGES/c27.PNG" height="276" width="300"></div>
					</div>
					
					<div class="offer1">
					<div class="offer2"><h1><center><a  style="text-decoration:none;color:#000000;" href="combo offers.php">Services</a></center></h1></div>
					<div class="offer3"><img src="IMAGES/c27.PNG" height="276" width="300"></div>
					</div>
					</div>	
					<?php
				        include ('footer.php');
				    ?>
					
					
					
					</body>
					
					</html>
					
					
					
		