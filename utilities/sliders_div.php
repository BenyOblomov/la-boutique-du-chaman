<?php
foreach ($sliders as $value) {
    echo '<div class="carousel-item">
    <img src="assets/img/' . $value['name'] . '.jpg" class="d-block w-100" alt="' . $value['description'] . '">
  </div>';
}
