<?php
function slidersImg($db) {
    $sqlSliders = "SELECT * FROM sliders;";
    $requeteSliders = $db->query($sqlSliders);
    $sliders = $requeteSliders->fetchAll();
    return $sliders;
}
