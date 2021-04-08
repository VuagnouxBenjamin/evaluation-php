<?php 
    // Claass Init.
    require '../controllers/table/Produit.php'; 
    use App\Table\Produit; 

    // DB Init.
    require '../controllers/Database.php';
    use App\Database; 
    $db = new Database('jarditou'); 

    // Getting datas from DB. 
    $produits = $db->prepare(
        "SELECT * 
        FROM produits 
        JOIN categories 
            ON categories.cat_id = produits.pro_cat_id
        WHERE pro_id = ?  
        ", [$_GET['pro_id']],'App\Table\Produit', true); 
?>


<?php include 'template/header.php' ?>

<div class="text-center mt-3">
    <img src="<?= $produits->getIMG() ?>" alt="" width="250">
</div>

<form action="controllers/add_form.php" method="post" enctype="multipart/form-data">
    <div class="form-group mt-4">
        <label for="prod_ref" class="mb-2">Référence :</label>
        <input type="text" class="form-control" id="prod_ref" name="prod_ref" value="<?= $produits->pro_ref?>" readonly>
    </div>
    <div class="form-group mt-4">
        <label for="prod_cat" class="mb-2">Catégorie :</label>
      c  <selet class="form-control" id="prod_cat" name="prod_cat" readonly>
            <!-- <?php foreach($categories as $categorie) : ?>
                <option value = <?= $categorie->cat_id ?>><?= $categorie->cat_nom ?></option>
            <?php endforeach; ?> -->
            <option value = <?= $produits->cat_id ?>><?= $produits->cat_nom ?>
        </select>
    </div>
    <div class="form-group mt-4">
        <label for="prod_lib" class="mb-2">Libellé :</label>
        <input type="text" class="form-control" id="prod_lib" name="prod_lib" value="<?= $produits->pro_libelle?>" readonly>
    </div>
    <div class="form-group mt-4">
        <label for="prod_des" class="mb-2">Description :</label>
        <textarea class="form-control" id="prod_des" rows="3" name="prod_des" readonly><?= $produits->pro_description ?></textarea>
    </div>
    <div class="form-group mt-4">
        <label for="prod_pri" class="mb-2">Prix :</label>
        <input type="text" class="form-control" id="prod_pri" name="prod_pri" value="<?= $produits->pro_prix . " €";?>" readonly>
    </div>
    <div class="form-group mt-4">
        <label for="prod_sto" class="mb-2">Stock :</label>
        <input type="text" class="form-control" id="prod_sto" name="prod_sto" value="<?= $produits->pro_stock?>" readonly>
    </div>
    <div class="form-group mt-4">
        <label for="prod_cou" class="mb-2">Couleur</label>
        <input type="text" class="form-control" id="prod_cou" name="prod_cou" value="<?= $produits->pro_couleur?>" readonly>
    </div>
    <div class="form-group mt-4">
        <p class="mb-2">Produit bloqué ?</p>
        <?= $produits->radioBlocked(); ?>
    </div>
    <div class="form-group mt-4">
        <label for="prod_dat" class="mb-2">Date d'ajout :</label>
        <input type="date" class="form-control" id="prod_dat" name="prod_dat" value="<?= $produits->pro_d_ajout?>" readonly>
    </div>
    <div class="form-group mt-4">
        <label for="prod_dat_mod" class="mb-2">Date de modification :</label>
        <input type="text" class="form-control" id="prod_dat_mod" name="prod_dat_mod" value="<?= str_replace('-', '/', $produits->getDate());?>" readonly>
    </div>
</form>

<div class="my-5">
    <a href="list.php" class="btn btn-secondary  shadow-sm">
        Retour
    </a>
    <a href="update_form.php?pro_id=<?= $produits->pro_id ?>" class="btn btn-warning  shadow-sm">
        Modifier
    </a>
    <a href="delete_form.php?pro_id=<?= $produits->pro_id ?>" class="btn btn-danger  shadow-sm">
        Supprimer
    </a>
</div>

<?php include 'template/footer.php' ?>