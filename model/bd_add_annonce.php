<?php
require_once "../inc/database.php";

if(isset($_POST['submit'])){
    // récupération des infos
    $titreAnnonce=htmlspecialchars($_POST['titre_annonce']);
    $description=htmlspecialchars($_POST['description']);
    $ville=htmlspecialchars($_POST['ville']);
    $codePostal=htmlspecialchars($_POST['code_postal']);
    $prix=htmlspecialchars($_POST['prix']);
    $typeAnnonce=htmlspecialchars($_POST['type_annonce']);

    // se connecter à la bdd
    $db = dbConnexion();
    
    // préparer la requête
    $request = $db->prepare("INSERT INTO advert (title, description, city, postal_code, type, price) VALUES (?,?,?,?,?,?)");
    
    // exécuter la requête
    try{
        $request->execute(array($titreAnnonce, $description, $ville, $codePostal, $typeAnnonce, $prix));
        echo '<script>window.location.href = "../les_annonces.php";</script>';
    }catch(PDOException $e){
        $e->getMessage();
    }


}
// if(isset($_POST['add_hotel'])){
//     // récupération des infos
//     $hotelName = htmlspecialchars($_POST['name_hotel']);
//     $location = htmlspecialchars($_POST['location_hotel']);
//     $capacityHotel = htmlspecialchars($_POST['capacity_hotel']);

//     // se connecter à la bdd
//     $db = dbConnexion();
    
//     // préparer la requête
//     $request = $db->prepare("INSERT INTO hotels (location, capacity, hotel_name) VALUES (?,?,?)");
    
//     // exécuter la requête
//     try{
//         $request->execute(array($location, $capacityHotel, $hotelName));
//         echo '<script>window.location.href = "https://unhelped-drawer.000webhostapp.com/admin/hotel_list.php";</script>';
//     }catch(PDOException $e){
//         $e->getMessage();
//     }


// }