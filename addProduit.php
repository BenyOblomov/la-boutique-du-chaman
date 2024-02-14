<?php
require_once __DIR__ . ('/fonctions/produits.fn.php');
include('utilities\header.php');

$types = findAllTypes($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $typeId = htmlspecialchars($_POST['typeId']);
    $note = htmlspecialchars($_POST['note']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);
    $path = htmlspecialchars($_POST['path']);

    try {
        $db->beginTransaction();
        $sql1 = "INSERT INTO `products` (`name`, `typeId`, `note`, `price`, `description`) VALUES ('$name', '$typeId', '$note', '$price', '$description')";
        $db-> query($sql1);

        $productId = $db->lastInsertId();

        $sql2 = "INSERT INTO `pictures` (`name`, `path`, `productsId`) 
        VALUES ('$name', '$path','$productId')";
        $db->query($sql2);
        $db->commit();

    } catch (PDOException $e) {
        $db->rollback();
        echo "erreur : " . $e->getMessage();
    }

}
?>
    <main>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>Ajouter un produit</h2>
            <form action="addProduit.php" method="post" class="d-flex flex-column justify-content-center align-items-center"><br>
                <label for="name">Nom : </label>
                <input type="text" name="name"><br>
                <label for="path">Chemin : </label>
                <input type="text" name="path"><br>
                <label for="note">Note : </label>
                <input type="text" name="note"><br>
                <label for="price">Prix : </label>
                <input type="text" name="price"><br>
                <label for="description">Description : </label>
                <textarea name="description" style="height: 100px"></textarea><br>
                <select class="form-select" name="typeId" aria-label="Default select example">
                <option selected>Selectionner le type</option>
                <?php foreach ($types as $type) {?>
                    <option value="<?=$type['id']?>"><?=$type['name']?></option>
                    <?php } ?>
                </select><br>
                <input type="submit" value="Ajouter"><br>
            </form>
        </div>     
        </main>
<?php
require (__DIR__ . '/utilities/footer.php');