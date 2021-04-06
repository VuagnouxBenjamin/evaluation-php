<?php 
use App\Table\Produit; 
use App\Table\Categorie; 

$produits = $db->prepare(
    "SELECT * 
    FROM produits 
    JOIN categories 
        ON categories.cat_id = produits.pro_cat_id
    WHERE pro_id = ?  
    ", [$_GET['pro_id']],'App\Table\Produit', true); 
// DEBUG
// var_dump($produits); 

// $categories = $db->query(
//     "SELECT DISTINCT * 
//     FROM categories
//     ", 'App\Table\Categorie'); 

// DEBUG
// var_dump($categories); 
?>



<div class="text-center mt-3">
    <img src="<?= $produits->getIMG() ?>" alt="" width="250">
    <h1 class="display-2 fw-bold"><?= $produits->pro_libelle; ?></h1>
    <p class="display-4">
        Etes vous sûr de vouloir supprimer <br>
       <span class="fw-bold">"<?=$produits->pro_libelle; ?>"</span> de la base de données ?   
    </p>
</div>

<form action="app/delete_script.php" class="text-center my-5">
    <a href="index.php?p=detail&pro_id=<?= $produits->pro_id ?>" class="btn btn-secondary btn-lg">Retour</a>
    <button type="submit" class="btn btn-danger btn-lg">Supprimer</button>
</form>