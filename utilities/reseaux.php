<?php
// Boucle foreach parcourant le tableau $reseaux et affichant les icônes des réseaux sociaux
foreach ($reseaux as $value) {
    // Affichage d'un élément de liste avec une marge horizontale et verticale
    echo '<li class="mx-3 my-1">';
    // Affichage d'un lien vers un réseau social avec une image correspondante
    echo '<a href=""><img src="assets/img/' . $value['name'] . '.png" alt="lien vers ' . $value['name'] . '"></a>';
    echo '</li>';
}
?>


