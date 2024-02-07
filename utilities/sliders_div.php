<?php
// Boucle foreach parcourant le tableau $sliders et affichant les éléments du carrousel
foreach ($sliders as $value) {
    // Début d'un élément de diapositive du carrousel
    echo '<div class="carousel-item">';
    // Affichage de l'image correspondant à la diapositive avec une classe pour le style et une description en alt
    echo '<img src="assets/img/' . $value['name'] . '.jpg" class="d-block w-100" alt="' . $value['description'] . '">';
    // Fin de l'élément de diapositive du carrousel
    echo '</div>';
}
?>
