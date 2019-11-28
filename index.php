
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0, viewport-fit=cover">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $color; ?>">
<h1><?php echo $title ?></h1>
<div class="wrap">
</div>
<div style="padding: 10px 10px 40px 10px;"><p class="footer">© 2019 - Quentin P - Rayan S - Rodrigue C - Glenn G - Tous droits réservés - Mentions légales</p></div>
</body>
</html>

<?php

$d = dir("media");
echo "Pointeur: ".$d->handle."<br>\n";
echo "Chemin: ".$d->path."<br>\n";
while($entry = $d->read()) {
    echo $entry."<br>\n";
}
$d->close();



$d = dir("vendor");
echo "Pointeur: ".$d->handle."<br>\n";
echo "Chemin: ".$d->path."<br>\n";
while($entry = $d->read()) {
    echo $entry."<br>\n";
}
$d->close();






// function list_dir($name) {
// 	if ($dir = opendir($name)) {
// 	  while($file = readdir($dir)) {
// 		echo "$file<br>\n";
// 		if(is_dir($file) && !in_array($file, array(".",".."))) {
// 		  list_dir($file);
// 		}
// 	  }
// 	  closedir($dir);
// 	}
//   }
//   list_dir("");

//   function list_dir($name, $level=0) {
// 	if ($dir = opendir($name)) {
// 	  while($file = readdir($dir)) {
// 		for($i=1; $i<=(4*$level); $i++) {
// 			echo "&nbsp;";
// 		}
// 		echo "$file<br>\n";
// 		if(is_dir($file) && !in_array($file, array(".",".."))) {
// 		  list_dir($file,$level+1);
// 		}
// 	  }
// 	  closedir($dir);
// 	}
//   }
//   list_dir("");







?>