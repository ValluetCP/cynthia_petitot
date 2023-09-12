<?php
include_once "inc/header.php"; 
require_once "./model/functions.php";
$annonce = annonce();
?>

<div class="container d-flex flex-wrap">
    <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
            <p class="card-text"><?= $annonce['title']; ?></p>
            <p class="card-text"><?= $annonce['description']; ?></p>
            <p class="card-text"><?= $annonce['city']; ?></p>
            <p class="card-text"><?= $annonce['postal_code']; ?> </p>
            <p class="card-text"><?= $annonce['price']; ?> €</p>
            <form action="./model/bd_annonce_seule.php" method="post">
                <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
                <input type="text" name="id" value="<?= $_GET['id']; ?>" hidden >
                <button type="submit" id="reservation" class="btn btn-primary mt-5 mb-5" name="reservation" value="reservation">Je réserve</button>
            </form>
            <!-- <a class="btn btn-info" href="./les_annonces.php?id=<?= $annonce['id'];?>"> Je réserve</a> -->
        </div>
    </div>
</div>

<?php include_once "inc/footer.php"; ?>