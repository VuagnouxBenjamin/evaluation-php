<?php 
    // Initialisation de l'autoloader. 
    require 'app/Autoloader.php'; 
    App\Autoloader::register(); 

    // Initialisation et connexion à la BDD. 
    use App\Database; 
    $db = new Database('jarditou'); 

    // Direction page d'accueil si aucune variable p en GET. 
    if (isset($_GET['p'])) {
        $p = $_GET['p']; 
    } else {
        $p = 'home'; 
    }

    // Gestion du template et affichage des bonnes pages. 
    ob_start(); 
    if ($p === 'home') {
        require 'pages/home.php'; 
    } elseif ($p === 'list') {
        require 'pages/list.php'; 
    } elseif ($p === 'contact') {
        require 'pages/contact.php'; 
    } elseif ($p === 'detail') {
        require 'pages/detail.php'; 
    } elseif ($p === 'ajout') {
        require 'pages/ajout.php'; 
    } elseif ($p === 'suppr') {
        require 'pages/suppr.php'; 
    } elseif ($p === 'modif') {
        require 'pages/modif.php'; 
    } 
    $content = ob_get_clean(); 
    require 'pages/template/default.php';

    // 

?>