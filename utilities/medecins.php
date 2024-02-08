<?php
// Boucle foreach parcourant le tableau $medecins et affichant les informations de chaque médecin
foreach ($medecins as $value){
    echo ' <div class="card border m-5 w-75 w-50-md" style="width: 35rem;">';
    // Affichage de l'image du médecin
    echo '<img src="assets/img/'.$value["path"].'.png" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    // Affichage du nom du médecin
    echo '<h5 class="card-title">'.$value["name"].'</h5>';
    // Affichage de la description du médecin
    echo '<p class="card-text">'.$value["description"].' </p>';
    echo '</div>';
    // Liste des éléments associés au médecin (études et prix)
    echo '<ul class="list-group list-group-flush">';
    echo '<li class="list-group-item">'.$value["studies"].'</li>';
    echo '<li class="list-group-item">'.$value["price"].'</li>';
    echo '</ul>';
    // Bouton pour réserver un créneau avec le médecin
    echo '<div class="card-body">';
    echo '<a href="page404.php"><button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">reserver un creneau</button></a>';
    echo '</div>';
    echo '</div>';
}
?>
