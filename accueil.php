<?php
session_start();
include_once "inc/header.php"; 
require_once "model/functions.php";
$listAnnonce = annonceList2();
?>

<div class="container d-flex flex-wrap">
    <?php foreach($listAnnonce as $annonce){ ?>
        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><?= $annonce['title']; ?></p>
                <p class="card-text"><?= $annonce['city']; ?></p>
                <p class="card-text"><?= $annonce['postal_code']; ?> </p>
                <p class="card-text"><?= $annonce['price']; ?> €</p>
                <?php if(empty($annonce['reservation_message'])){ ?>
                    
                    <a class="btn btn-info" href="./annonce_seule.php?id=<?= $annonce['id'];  ?>"> Consulter l'annonce</a>

                <?php }else{  ?>

                    <p class="card-text" style="background-color: gray;">Réservé</p>
                    
                <?php } ?>
                
            </div>
        </div>
    <?php } ?>
</div>


<?php include_once "inc/footer.php"; ?>

<a class="btn btn-info" href="./annonce_seule.php?id=<?= $annonce['id'];  ?>"> Consulter l'annonce</a>
