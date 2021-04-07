<?php 
    // Initialisation des  classes Produit.
    require '../app/table/Produit.php'; 
    use App\Table\Produit; 
    require '../app/table/Categorie.php'; 
    use App\Table\Categorie; 
    require '../app/App.php'; 
    use App\App; 

    // // Initialisation de la BDD.
    require_once('db_config.php');
    // require '../app/Database.php';
    // use App\Database; 
    // $db = isset($db) ? $db : new Database('jarditou'); 

    // Récuperation des données. 
    $produits = $db->query(
        "SELECT * 
        FROM produits 
        JOIN categories 
            ON categories.cat_id = produits.pro_cat_id
        ",'App\Table\Produit'); 
    
    $categories = $db->query(
        "SELECT DISTINCT * 
        FROM categories
        ", 'App\Table\Categorie'); 
?>

<?php include 'template/header.php' ?>

<h1 class="mt-5">Ajout d'un produit à la base de donnée</h1>

<form action="../models/add_script.php" method="post" enctype="multipart/form-data">
    <div class="form-group mt-4">
        <label for="prod_ref" class="mb-2">Référence* :</label>
        <input type="text" class="form-control" id="prod_ref" name="prod_ref" value="<?= isset($_POST['prod_ref']) ? $_POST['prod_ref'] : ""; ?>">
        <p class="text-danger">
            <?php echo isset($error_ref) ? $error_ref : '' ;?>
        </p>
    </div>

    <div class="form-group mt-4">
        <label for="prod_cat" class="mb-2">Catégorie* :</label>
        <select class="form-control" id="prod_cat" name="prod_cat">
            <?php foreach($categories as $categorie) : ?>
                <option value = <?= $categorie->cat_id ?>><?= $categorie->cat_nom ?></option>
            <?php endforeach; ?> 
        </select>
    </div>

    <div class="form-group mt-4">
        <label for="prod_lib" class="mb-2">Libellé* :</label>
        <input type="text" class="form-control" id="prod_lib" name="prod_lib" value="<?= isset($_POST['prod_lib']) ? $_POST['prod_lib'] : ""; ?>">
        <p class="text-danger">
            <?php echo isset($error_lib) ? $error_lib : '' ;?>
        </p>
    </div>

    <div class="form-group mt-4">
        <label for="prod_des" class="mb-2">Description :</label>
        <textarea class="form-control" id="prod_des" rows="3" name="prod_des"><?= isset($_POST['prod_des']) ? $_POST['prod_des'] : ""; ?></textarea>
    </div>

    <div class="form-group mt-4">
        <label for="prod_pri" class="mb-2">Prix* :</label>
        <input type="text" class="form-control" id="prod_pri" name="prod_pri" value="<?= isset($_POST['prod_pri']) ? $_POST['prod_pri'] : ""; ?>">
        <p class="text-danger">
            <?php echo isset($error_pri) ? $error_pri : '' ;?>
        </p>
    </div>

    <div class="form-group mt-4">
        <label for="prod_sto" class="mb-2">Stock* :</label>
        <input type="number" class="form-control" id="prod_sto" name="prod_sto" value="<?= isset($_POST['prod_sto']) ? $_POST['prod_sto'] : 0; ?>">
        <p class="text-danger">
            <?php echo isset($error_sto) ? $error_sto : '' ;?>
        </p>
    </div>

    <div class="form-group mt-4">
        <label for="prod_cou" class="mb-2">Couleur :</label>
        <input type="text" class="form-control" id="prod_cou" name="prod_cou" value="<?= isset($_POST['prod_cou']) ? $_POST['prod_cou'] : ""; ?>">
    </div>

    <div class="form-group mt-4">
        <p class="mb-2">Produit bloqué* ?</p>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prod_blo" id="prod_blo_oui" value="1">
                <label class="form-check-label" for="prod_blo_oui">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="prod_blo" id="prod_blo_non" value="0" checked>
                <label class="form-check-label" for="prod_blo_non">Non</label>
            </div>
    </div>

    <div class="form-group mt-4">
        <label for="prod_dat_ajout" class="mb-2">Date d'ajout :</label>
        <input type="text" class="form-control" id="prod_dat_ajout" name="prod_dat_ajout" value="<?php echo App::getDate();?>" readonly>
    </div>

    <!-- <div class="form-group mt-4">
        <label for="prod_pic" class="mb-2">Image du produit :</label>
        <input type="file" class="form-control" id="prod_pic" name="prod_pic">
    </div> -->

    <div class="my-5">
        <a href="list.php" class="btn btn-secondary btn-lg">Retour</a>
        <button type="submit" class="btn btn-success btn-lg">Ajouter le produit</button>
    </div> 

</form>

<?php include 'template/footer.php' ?>








