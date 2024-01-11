<?php

include 'data/reseaux_data.php';

foreach ($reseaux as $value) {
    echo '<li class="mx-3 my-1"><a><img src="assets/img/' . $value['name'] . '.png" alt="lien vers ' . $value['name'] . '"></a></li>';
}

