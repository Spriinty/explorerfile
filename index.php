


 <?php require 'header.php'; ?>
<?php

$ressource = opendir('archive');

while(($entry = readdir($ressource)) !== FALSE){
    if ($entry != '.' && $entry != '..' && $entry != '-->'){
    echo $entry."<br/>";
    }
}
?>





   <!-- <div class="container-fluid h-100">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                <p>POUET POUET</p>
                </div>
            </div>
        </div>
    </div>-->

<?php require 'footer.php'; ?> 