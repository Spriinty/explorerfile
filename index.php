


 <?php require 'header.php'; ?>
<?php

$root = opendir('rootprojet');

// echo'
$ressource = opendir('archive');

$directory = getcwd(); /* FAIRE UN ECHO DE CETTE VARIABLE DANS LA BARRE DE NAVIGATION */
   /* AFFICHE LE CHEMIN DU DOSSIER EN COURS */

?>




<body class="bg-leaf">
<div class="container-fluid h-100">
        <div class="container ">

    <div class="container-fluid d-flex align-items-center">
        <div class="container bg-light">
            <div class="row">
                <div class="col-2 float-left">
                    <button type="button" class="btn btn-light"><a href="#"><i class="fas fa-home text-dark"></i></a></button>
                </div>
                <div class="col-8">
                    <p><?php echo $directory ?></p>
                </div>
                <div class="col-1 float-right">
                    <button type="button" class="btn btn-light"><a href="#"><i class="fas fa-arrow-alt-circle-left text-dark"></i></a></button>
                </div>
                <div class="col-1 float-right">
                    <button type="button" class="btn btn-light"><a href="#"><i class="fas fa-arrow-alt-circle-right text-dark"></i></a></button>
                </div>
            </div>
            <div class="row bg-dark pt-5 pl-5 pb-5">
                <div class="col-12">
                    <?php while(($entry = readdir($ressource)) !== FALSE){
                            if ($entry != '.' && $entry != '..' && $entry != '-->'){
                            echo $entry.", ";
                            }
                        } ?>
                </div>
                <!-- <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-folder text-blue h1"></i><br><span class="text-light">CSS</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-folder text-blue h1"></i><br><span class="text-light">JS</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-folder text-blue h1"></i><br><span class="text-light">MEDIA</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-file text-blue h1"></i><br><span class="text-light">contact.php</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-file text-blue h1"></i><br><span class="text-light">footer.php</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-file text-blue h1"></i><br><span class="text-light">header.php</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-file text-blue h1"></i><br><span class="text-light">index.php</span></a></button>
                <button type="button" class="btn btn-dark"><a href="#" class="text-decoration-none"><i class="fas fa-file text-blue h1"></i><br><span class="text-light">traitement.php</span></a></button> -->
            </div>
        </div>
    </div>-->
    
<?php require 'footer.php'; ?>
