<?php 
// Inclusion du fichier d'en-tête
include('utilities\header.php');
// Inclusion du fichier contenant les fonctions relatives aux médecins
include('fonctions/medecins.fn.php');
?>

<main class="container-fluid d-flex flex-column align-items-center">
    <section class="container-sm d-flex flex-column align-items-center">
        <!-- Titre principal -->
        <h2 class="fw-bold">La boutique du chaman : c'est quoi?</h2>
        <div class="d-flex justify-content-center align-items-center">
            <div class="w-50 m-5">
                <!-- Paragraphe d'introduction -->
                <p>Bienvenue à la <b>Boutique du Chaman</b>, l'ultime destination pour tous vos besoins en <b>potions et pierres magiques</b>potions et pierres magiques dans le royaume  Fondée il y a plus de 400 ans, notre boutique est située au cœur de la paisible cité d'Hyrule, où nos deux éminents spécialistes, le renommé <b>Dr Link et la mystique Dr Zelda</b>, mettent leur expertise au service des aventuriers intrépides.<br>Plongez dans un monde envoûtant de remèdes extraordinaires et d'amulettes mystiques, soigneusement sélectionnés pour maximiser votre potentiel héroïque. Que vous cherchiez à renforcer votre santé, accroître vos pouvoirs ou résister aux forces obscures, <b>La Boutique du Chaman</b> a tout ce dont vous avez besoin.<br>Nos potions sont préparées avec soin, à base d'ingrédients rares et puissants cueillis dans les recoins les plus mystérieux d'Hyrule. Le Dr Link et le Dr Zelda se tiennent prêts à vous guider à travers notre collection, garantissant que chaque visite à notre boutique soit une expérience magique inoubliable. <b>Préparez-vous à embrasser votre destinée avec les élixirs exceptionnels de La Boutique du Chaman!</b></p>
            </div>
            <!-- Carrousel d'images -->
            <div id="carouselExampleAutoplaying" class="carousel slide w-50 m-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Première diapositive active -->
                    <div class="carousel-item active">
                        <img src="assets/img/boutique.jpg" class="d-block w-100" alt="...">
                    </div>
                    <?php 
                    // Récupération des images du carrousel à partir de la base de données
                    $sqlSliders = "SELECT * FROM sliders;";
                    $requeteSliders = $db->query($sqlSliders);
                    $sliders = $requeteSliders->fetchAll();
                    // Inclusion du fichier contenant les divs pour chaque image du carrousel
                    include('utilities/sliders_div.php');
                    ?>
                </div>
                <!-- Contrôles du carrousel (précédent et suivant) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="container-sm">
        <div class="text-center mt-5">
            <!-- Titre pour les spécialistes -->
            <h2 class="fw-bold">Nos spécialistes</h2>
        </div>
        <div class="card-group w-100 m-auto justify-center">
            <?php
            // Récupération des données des médecins depuis la base de données
            $medecins = findAllMedecins($db);
            // Inclusion du fichier contenant les spécialistes
            include('utilities/medecins.php'); 
            ?>
        </div>
    </section>
</main>

<?php 
// Inclusion du fichier de pied de page
include('utilities/footer.php'); 
?>
