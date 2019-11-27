
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0, viewport-fit=cover">
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link href="//fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid bg-dark mb-3">
	<div class="container">
		<div class="row">
			<div class="col-3">Btn Home</a></div>
			<div class="col-3"><a href="#">Flèche gauche</a></div>
			<div class="col-3"><a href="#">Flèche droite</a></div>
			<div class="col-3"><p><?php echo getcwd(); ?></p></div>
		</div>
	</div>
</div>

<!-- <div class="wrap"> -->
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">

			<?php

			$path= "/var/www/html";
			chdir($path);


			/* getcwd() gives you back "c:\temp\" */
			$ressource = opendir($path);
			echo readdir($path);
			


			while(($entry = readdir($ressource)) !== FALSE){
    			// if ($entry == '.' && $entry == '..'){
				// 	echo "<a href=''>"
				
				// }
				echo $entry."<br/>";
			}

			?>

			</div>
		</div>
	</div>
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>