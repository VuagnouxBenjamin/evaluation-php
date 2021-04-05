<?php 

$config = "mysql:host=localhost;dbname=jarditou;charset=utf8"; 
$user = "root"; 
$password = ""; 

try {
    $db = new PDO($config, $user, $password); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Impossible de se connecter à la base de donnée <br />";
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    exit('Fin du script');
}
