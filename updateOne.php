<?php 
// Inclusion des fichiers de configuration et des fonctions relatives à la base de données
require_once __DIR__ . ('/config/config.php');
require_once __DIR__ . ('/fonctions/database.fn.php');
// Établissement de la connexion à la base de données
$db = getPDOlink($config);

// Inclusion des fonctions relatives aux produits
require (__DIR__ . '/fonctions/produits.fn.php'); 

$types = findAllTypes($db);

// Récupération de l'identifiant du produit à partir de l'URL
$currentId = $_GET['id'];
// Recherche du produit dans la base de données en fonction de son identifiant
$product = findProductById($db, $currentId);

// Vérification si l'identifiant du produit est défini dans l'URL ou si le produit n'existe pas
if (!isset($_GET['id']) || empty($product['id'])) {
    // Redirection vers la page d'accueil si l'identifiant du produit n'est pas défini ou s'il n'existe pas
    header("Location: /");
} else {
    // Définition du titre de la page avec le nom du produit
    $title = $product['name'];
}

// Inclusion de l'en-tête de la page
require (__DIR__ . '/utilities/header.php');

$sql = "SELECT * FROM products WHERE products.id = $currentId";

$result = $db-> query($sql);

$product = $result->fetch();

var_dump($_POST);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $note = $_POST['note'];
    $price = $_POST['price'];
    $typeId = $_POST['typeId'];
    $description = $_POST['description'];

    $sqlUpdate = "UPDATE products SET name = '$name', note = '$note', price = '$price', typeId = '$typeId', description = '$description' WHERE id = '$currentId';";
    $db-> query($sqlUpdate);
    header("Location: produitsAdmin.php");
    }
?>
        <main>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h2>Modifier un produit</h2>
                <form action="addProduit.php" method="post" class="d-flex flex-column justify-content-center align-items-center"><br>
                    <label for="name">Nom :</label><br>
                    <input type="text" name="name" value="<?=$product['name']?>"><br><br>

                    <label for="note">Note :</label><br>
                    <input type="text" name="note" value="<?=$product['note']?>"><br><br>

                    <label for="prix">Prix :</label><br>
                    <input type="text" name="price" value="<?=$product['price']?>"><br><br>

                    <select class="form-select" name="typeId" aria-label="Default select example">
                        <option selected>Selectionner le type</option>
                        <?php foreach ($types as $type) {?>
                        <option value="<?=$type['id']?>"><?=$type['name']?></option>
                        <?php } ?>
                    </select>

                    <label for="description">Description :</label><br>
                    <textarea name="description">
                    <?=$product['description']?>
                    </textarea><br><br>

                    <input type="submit" value="Modifier">
                </form>
            </div>
        </main>
<?php
require (__DIR__ . '/utilities/footer.php');