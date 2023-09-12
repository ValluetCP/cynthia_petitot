<?php
require_once "./inc/database.php";

// LIST ANNONCE - PAGE "CONSULTER TOUTES LES ANNONCES"

function annonceList(){
    
    // se connecter à la db (data base) ou bd (base de donnée)
    $db = dbConnexion();

    // préparer une requête de lecture (récupérer la liste des hôtels)
    $request = $db->prepare("SELECT * from advert");

    // exécuter la requête
    $annoncelList = null;

    try{
    
        $request->execute();
    
        // récupère le résultat dans un tableau
        $annoncelList = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
    echo $e->getMessage();
    }
    return $annoncelList;
}

// LIST ANNONCE - PAGE "ACCUEIL"


function annonceList2(){
    
    $db = dbConnexion();

    $request = $db->prepare("SELECT * FROM advert ORDER BY id DESC LIMIT 15");

    $annoncelList2 = null;

    try{
    
        $request->execute();
    
        // récupère le résultat dans un tableau
        $annoncelList2 = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
    echo $e->getMessage();
    }
    return $annoncelList2;
}


// function annonce(){
    
//     $db = dbConnexion();
//     $request2 = $db->prepare("SELECT * FROM advert ORDER BY id DESC LIMIT 15");
//     // $request = $db->prepare("SELECT * FROM advert");


//     // exécuter la requête
//     $annoncelList2 = null;

//     try{
    
//         // $request->execute();
//         $request2->execute();

//             $annoncelList2 = $request2->fetch(PDO::FETCH_ASSOC);
        
//         // }else{
//         //     $annoncelList2 = $request2->fetch(PDO::FETCH_ASSOC);
//         // }
//     }catch(PDOException $e){
//     echo $e->getMessage();
//     }
//     return $annoncelList2;
// }

function annonce(){


    if(isset($_GET['id'])){
        //  se connecter à la bdd
        $id=$_GET['id'];
        $db = dbConnexion();
        $request = $db->prepare("SELECT * FROM advert WHERE id = ?");
        
        try{
            $request->execute(array($id));
            $annonce = $request->fetch(PDO::FETCH_ASSOC);
            return $annonce;
    
        }catch(PDOException $e){
         echo $e->getMessage();
        }
    
     }
     
    } 

?>