<?php

$ressource = opendir('archive');

while(($entry = readdir($ressource)) !== FALSE){
    if ($entry != '.' && $entry != '..' && $entry != '-->'){
    echo $entry."<br/>";
    }
}
?>






<!-- <?php require 'header.php'; ?>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <p>POUET POUET</p>
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?> -->