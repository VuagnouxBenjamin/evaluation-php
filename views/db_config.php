<?php 
// Initialisation de la BDD.
require '../controllers/Database.php';
use App\Database; 
$db = isset($db) ? $db : new Database('jarditou'); 

?>