<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/menu.css"/>
								<link rel="stylesheet" type="text/css" href="css/contact us.css"/>
				</head>
				
			   <body>
				<?php
				include ('menu.php');
				?>
				
				
				
				
				<div class="contact">
				
		   <div class="contact1">
		   <p style="margin-left:30px;font-family:Vladimir Script;font-size:38px;margin-left:200px;">Contact Info</p>
		   <div class="container-fluid" style="width: 100%;">
  <!-- <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2616.2922454714108!2d2.1161296156802574!3d49.024048479304085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f4d9ea701753%3A0x9ef1777390ba2a86!2sADMS+Enzynov!5e0!3m2!1sfr!2sfr!4v1507043515475" width="1000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=1%20rue%20de%20paris%2Cparis&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:400px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:600px;}</style></div>
</div>
		   <p style="margin-left:100px; font-family:Vladimir Script; font-size:23px;margin-top:10px;">Guesto Coffee.<br/>
           						 Rue de Paris<br/>
								  Paris,France  Freephone: +1 800 559 6580<br/>
									Telephone: 0172 601938<br/>
										 <a style="text-decoration:none;color:#000000;href="#">E-mail: mail@example.org</a></p>
		   </div>
		   
		   
		   
		 <div class="contact2">
		   
		   <p style="margin-left:30px">Contact Form</p><br/>
		   <form action="../contact1.php" method="get">
		   
		   
		   <input type="text" placeholder="Name"  name="name" class="a"/><br/>
		    <input  type="text" placeholder="Your Email " name="mail" class="b"/><br/>
			<input  type="text" placeholder="Phone " name="ph" class="b"/><br/>
			 <textarea class="c" rows="6" cols="18" placeholder="Message " name="msg" ></textarea><br/>
			 
		<input class="d" type="submit" value ="Submit" style="background:#E4D8C2; height:35px; width:120px; border-radius:10px;"/>
		  </div>
		  
		 
		  
		  </div>
		  
		  
		 
		 
		      <?php
				        include ('footer.php');
				    ?>
		  
		        </div>
		   
			 </div>
		   </body>
		   </html>