<?php
    // Inclusion du fichier contenant les fonctions pour le pied de page
    include 'fonctions/footer.fn.php';
?>
<!-- Début du pied de page -->
<footer>
    <!-- Première section du pied de page -->
    <div class="container-fluid d-flex justify-content-between align-items-center bg-footer">
        <!-- Logo de l'entreprise -->
        <img src="assets/img/logo-removebg-preview.png" alt="logo">
        <!-- Horaires de l'entreprise -->
        <p>
            <b>Horaires</b><br>Du Lundi au Vendredi<br>de 8h à 14h, de 16h à 21h
        </p>
        <!-- Image animée représentant un lien -->
        <img class="mb--50" src="assets/img/gif.gif" alt="link en mouvement">
    </div>
    <!-- Deuxième section du pied de page -->
    <div class="container-fluid d-flex justify-content-center bg-dark">
        <ul class="d-flex justify-content-center align-items-center">
            <?php
            // Récupération de tous les réseaux sociaux
            $reseaux = findAllNetworks($db);
            // Inclusion du fichier contenant la structure HTML des réseaux sociaux
            include 'utilities/reseaux.php';
            ?>
        </ul>
    </div>   
</footer>
<!-- Script JavaScript pour Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
