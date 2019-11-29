<?php $path = getcwd()."/".$_GET["file"]; ?>


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
		<div class="row pt-2">
			<div class="col-3"><a href="index.php">Btn Home</a></div>
			<div class="col-3"><a href="#">Flèche gauche</a></div>
			<div class="col-3"><a href="#">Flèche droite</a></div>
			<div class="col-3 text-white"><p><?php echo $path; ?></p></div>
		</div>
	</div>
</div>

<!-- <div class="wrap"> -->
<div class="container-fluid">
	<div class="container">
		<div class="row">

			<?php

			$dir = $path; // path from top
			$files = scandir($dir);
			$files_n = count($files);
			// var_dump($path);
			
			$i=0;

			// while($i<=$files_n)
			
			for($i=0; $i<=$files_n-1; $i++){

				// "is_dir" only works from top directory, so append the $dir before the file
				if (is_dir($dir.'/'.$files[$i])){

					// $MyFileType[$i] = "D" ; // D for Directory
					echo '<div class="col-3 text-center h-70-px">'.'<a href="index.php?file='.$files[$i].'">'.'<img src="media/data-storage.png" alt="Fichier" width="50px" height="50px"/>'.'<p>'.$files[$i].'</p>'.'</a>'.'</div>' ;
				} else{
					// $MyFileType[$i] = "F" ; // F for File
					
					$extendFile = pathinfo($files[$i], PATHINFO_EXTENSION);

					echo '<div class="col-3 text-center h-70-px">'.'<img src="media/'."$extendFile".'.png" alt="Fichier" width="50px" height="50px"/>'.'<p>'.$files[$i].'</p>'.'</div>';
				}
				// print itemNo, itemType(D/F) and itemname
				// $i++;
			}

			?>

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