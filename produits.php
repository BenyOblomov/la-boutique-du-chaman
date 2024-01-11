<?php 
    include('utilities/header.php');
?>
<section class="container-md w-66 m-auto">
    <div class="text-center text-uppercase mt-5">
        <h2 class="fw-bold">Nos elixirs</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">
        <?php
            include 'data/produits_data.php';
            foreach ($produits as $value) {
            include 'utilities/cards.php';
            }
        ?>
    </div>
</section>
<section class="container-md w-66 m-auto">
    <div class="text-center text-uppercase mt-5">
        <h2 class="fw-bold">Nos pierres</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5">
    <?php
        include 'data/produits_data.php';
        foreach ($pierres as $value) {
        include 'utilities/cards.php';
        }
    ?>
    </div>
</section>
<?php
include('utilities/footer.php');
?>