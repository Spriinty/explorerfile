<?php 



if(!isset($_GET['file'])){
	$_GET['file']= '.';
	}

$path = getcwd()."/".$_GET["file"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Explorateur de fichiers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0, viewport-fit=cover">
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="//fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="min-h-100vh pt-5">
<div class="container-fluid d-flex pt-5">
	<div class="container shadow bg-mid-black border-purple">
		<div class="row pt-2 bg-dark align-items-center mb-2">
			<div class="col-lg-3 col-md-3 col-sm-2 col-2 text-center"><a href="index.php"><i class="h5 fas fa-home text-light"></i></a></div>
			<div class="col-lg-2 col-md-3 col-sm-2 col-2 text-center"><a href="javascript:history.go(-1)"><i class="h5 fas fa-arrow-alt-circle-left text-light"></i></a></div>
			<div class="col-lg-2 col-md-3 col-sm-2 col-2 text-center "><a href="javascript:history.go(+1)"><i class="h5 fas fa-arrow-alt-circle-right text-light"></i></a></div>
			<div class="col-lg-5 col-md-3 col-sm-6 col-6 text-center a-link"><p class='m-0'><?php echo $path; ?></p></div>
		</div>
		<div class="row pt-3">
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
					if ($files[$i] == '.' or $files[$i] == '..'){continue;}
					// $MyFileType[$i] = "D" ; // D for Directory
					echo '<div class="col-lg-3 col-md-3 col-sm-6 col-6 col-bg text-center h-70-px">'.'<a href="index.php?file='.$files[$i].'">'.'<img src="media/data-storage.png" alt="Fichier" width="512px" height="512px"/>'.'<p>'.$files[$i].'</p>'.'</a>'.'</div>' ;				} else{
					// $MyFileType[$i] = "F" ; // F for File
					
					$extendFile = pathinfo($files[$i], PATHINFO_EXTENSION);

					echo '<div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center h-70-px">'.'<img src="media/'."$extendFile".'-icon.png" alt="Fichier" width="512px" height="512px"/>'.'<p>'.$files[$i].'</p>'.'</div>';
				}
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
	<script src="js/script.js"></script>
  </body>
</html>
