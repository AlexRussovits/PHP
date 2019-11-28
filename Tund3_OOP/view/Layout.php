<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.ico">

<!-- ICON CSS -->
<link rel="stylesheet" href="../js/font-awesome/css/font-awesome.min.css">

<!-- CSS -->
<link rel="stylesheet" href="../js/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../js/slick/slick.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/style.css">

<!-- MODERNIZR -->
 <script src="../js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <title>Сrucial</title>
</head>
<body>
<div class="wrapper">
	<header class="header header3 header5 header6">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="search-bar">
					<input type="search" placeholder="Type search text here...">
                    <div class="search-close"><i class="fa fa-times"></i></div>
                </div>
                
                <?php
            

                ?>
                

				
				<div class="navbar-header hidden visible-xs">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="layout.php"><img src="../img/logo.png" class="img-responsive" alt=""/></a>
				</div>				

				<div class="navbar-social">
					<a href="https://www.facebook.com/" ><img src="../img/icon/3.png" class="img-responsive" alt=""/></a>
					<a href="https://twitter.com"><img src="../img/icon/4.png" class="img-responsive" alt=""/></a>
					<a href="https://www.instagram.com/"><img src="../img/icon/5.png" class="img-responsive" alt=""/></a>
				</div>

				<div class="navbar-brand hidden-xs">
					<a href="#"><img src="../img/logo2.png" class="img-responsive" alt=""/></a>
				</div>
				
				<div class="search-trigger pull-right"></div>

				<div class="login pull-right"></div>
                
                <?php


                ?> 

			</div>
		</nav>
        <div class="nav-white">
		<div class="container">
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
            
            <?php
                Controller::AllCategory();
            ?>
							
			</ul>
		</div>
	
		</div>
		</div>
		
		<!-- /.navbar-collapse -->			
	</header>    

<?php


?>   

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/slick/slick.min.js"></script>
<script src="../js/theme.js"></script>

</body>
</html>
