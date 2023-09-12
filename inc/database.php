

<?php 

function dbConnexion(){
    $connexion = null;
    $host = "localhost";
    $nam = "wf3_php_intermediaire_cynthia";
    $root = "root";
    $admin = "";
    try{
        $connexion = new PDO("mysql:host=$host;dbname=$nam", $root, $admin);
    }catch (PDOException $e){
        $e->getMessage();
    }
    return $connexion;
}

// Lebonappart123?