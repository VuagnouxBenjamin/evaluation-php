<?php 
// Initialisation de la BDD.
require '../app/Database.php';
use App\Database; 
$db = isset($db) ? $db : new Database('jarditou'); 

?>