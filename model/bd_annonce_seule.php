<?php
require_once "../inc/database.php";


if(isset($_POST['reservation'])){
    // récupération des infos
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $id = htmlspecialchars($_POST['id']); 
    $db = dbConnexion();
    $request = $db->prepare("UPDATE advert  SET  reservation_message = ? WHERE  id = ?");
    
    // exécuter la requête
    try{
        $request->execute(array($commentaire, $id));
        echo '<script>window.location.href = "../accueil.php";</script>';
    }catch(PDOException $e){
        $e->getMessage();
    }

}

// if(!empty($commentaire)){
//     echo "Réservé";

// }


?>

