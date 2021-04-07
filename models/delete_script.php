<?php 

// Initialisation de la BDD.
require '../app/Database.php';
use App\Database; 
$db = new Database('jarditou'); 

// Récuperation des données. 
$produits = $db->delete("DELETE FROM produits WHERE pro_id = ?", [$_POST['pro_id']]); 

header('location: ../pages/list.php');

?>