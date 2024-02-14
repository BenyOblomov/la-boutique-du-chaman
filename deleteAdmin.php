<?php
// Inclusion des fonctions relatives aux produits
require (__DIR__ . '/fonctions/produits.fn.php');
// Inclusion du fichier d'en-tête
include('utilities\header.php');
var_dump($_POST);
$produits = findAllProducts($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['jeu'];

    $sql = "DELETE FROM pictures WHERE productsId = $productId";
    $db-> query($sql);
    header("Location: produitsAdmin.php");

    $sql = "DELETE FROM products WHERE id = $productId";
    $db-> query($sql);
    header("Location: produitsAdmin.php");
    }
?>

<div class="d-flex">
    <h3 class="p-4"><a href="index.php">Accueil</a></h3>
</div>
<form action="deleteAdmin.php" method="post" class="p-1">
  <legend>Selectionner le jeu a supprimer :</legend>
<?php foreach ($produits as $row): ?>
    <div>
    <input type="radio" id="<?= $row['id'] ?>" name="jeu" value="<?= $row['id'] ?>"/>
    <label for="<?= $row['id'] ?>"><?= $row['name'] ?></label>
  </div>
<?php endforeach; ?>
<div>
    <button class="m-3" type="submit">Supprimer</button>
  </div>
</form>
</main>
<?php
require (__DIR__ . '/utilities/footer.php');