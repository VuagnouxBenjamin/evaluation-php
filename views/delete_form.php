<?php 
    // Class init
    require '../controllers/table/Produit.php'; 
    use App\Table\Produit; 

    // DB init. 
    require '../controllers/Database.php';
    use App\Database; 
    $db = new Database('jarditou'); 

    // Getting Datas from DB
    $produits = $db->prepare(
        "SELECT * 
        FROM produits 
        JOIN categories 
            ON categories.cat_id = produits.pro_cat_id
        WHERE pro_id = ?  
        ", [$_GET['pro_id']],'App\Table\Produit', true); 
?>

<?php include 'template/header.php' ?>


<form action="../models/delete_script.php" class="text-center my-5" method="post">
    <div class="text-center mt-3">
        <img src="<?= $produits->getIMG() ?>" alt="" width="250">
        <h1 class="display-2 fw-bold"><?= $produits->pro_libelle; ?></h1>
        <p class="display-4">
            Etes vous sûr de vouloir supprimer <br>
        <span class="fw-bold">"<?=$produits->pro_libelle; ?>"</span> de la base de données ?   
        </p>
    </div>

    <input type="hidden" name="pro_id" value="<?= $_GET['pro_id']; ?>">
    
    <a href="details.php?pro_id=<?= $produits->pro_id ?>" class="btn btn-secondary btn-lg">Retour</a>
    <button type="submit" class="btn btn-danger btn-lg">Supprimer</button>
</form>

<?php include 'template/footer.php' ?>
