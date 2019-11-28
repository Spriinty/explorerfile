
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

// La classe dir contient les propriétés et méthodes permettant de parcourir un dossier pour en lister les fichiers.

  function list_dir($name, $level=0) {
    if ($dir = opendir($name)) {
      while($file = readdir($dir)) {
          for($i=1; $i<=(4*$level); $i++) {
              echo "&nbsp";
          }
        echo "$file<br>\n";
        if(is_dir($file) && !in_array($file, array(".",".."))) {
          list_dir($file, $level+4);
        }
      }
      closedir($dir);
    }
  }
  list_dir(".");


  <table border="1" cellspacing="0" cellpadding="10" bordercolor="gray">
  <tr valign="top"><td>

?> 

<table border="1" cellspacing="0" cellpadding="10" bordercolor="gray">
<tr valign="top"><td>

<?php 
/* lien sur la racine */
if(!$dir) {
  echo "/<br />";
} else {
  echo "<a href=\"$PHP_SELF\">/</a><br />";
}
list_dir($BASE, rawurldecode($dir), 1); 
?>