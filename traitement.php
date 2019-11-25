<?php

$chemindossier = "/archive/"

// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($chemindossier)) {
    if ($dh = opendir($chemindossier)) {
        while (($file = readdir($dh)) !== false) {
            echo "fichier : $file : type : " . filetype($chemindossier . $file) . "\n";
        }
        closedir($dh);
    }
}

}




?>