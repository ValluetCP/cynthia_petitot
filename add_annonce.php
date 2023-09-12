<?php
session_start();
include_once "inc/header.php"; 
// $listRoom = roomList();
?>
<div class="container">
    <h1 class="m-5">Ajouter une annonce</h1>
    <form action="./model/bd_add_annonce.php" method="post">
        
        <div class="form-group  mb-3">
            <label for="titre_annonce" class="m-2">Titre annonce :</label>
            <input type="text" class="form-control text-uppercase" id="titre_annonce" name="titre_annonce" >
        </div>
 
        <div class="form-group  mb-3">
            <label for="description"  class="m-2">Description :</label>
            <input type="text" class="form-control" id="description" name="description" >
        </div>
 
        <div class="form-group  mb-3">
            <label for="ville"  class="m-2">Ville du bien immobilier:</label>
            <input type="text" class="form-control" id="ville" name="ville" >
        </div>
 
        <div class="form-group  mb-3">
            <label for="code_postal"  class="m-2">code_postal :</label>
            <input type="text" class="form-control" id="code_postal" name="code_postal" >
        </div>

        <div class="form-group  mb-3">
            <label  class="m-2">Prix :</label>
            <input type="text" class="form-control" name="prix" >
        </div>

        <div class="form-group mt-5 mb-5 d-flex justify-content-around">
            <label class="me-xl-5"> Type d’annonce :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_annonce" id="location" value="location">
                <label class="form-check-label">Location</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_annonce" id="vente" value="vente">
                <label class="form-check-label">Vente</label>
            </div>
        </div>
        
    
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="submit" value="submit">Envoyer</button>
    </form>
</div>

<?php include_once "inc/footer.php"; ?>