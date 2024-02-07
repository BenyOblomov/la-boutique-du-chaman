<?php
// Boucle foreach parcourant le tableau $pages et affichant les liens de navigation pour chaque page
foreach ($pages as $value) {
    // Affichage d'un élément de navigation sous forme d'élément de liste avec une classe nav-item
    echo '<li class="nav-item">';
    // Affichage d'un lien de navigation avec le chemin vers la page et le nom de la page
    echo '<a aria-current="page" class="text-warning nav-link" href="' . $value['path'] . '">' . $value['name'] . '</a>';
    echo '</li>';
}
?>
