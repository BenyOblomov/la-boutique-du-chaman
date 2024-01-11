<?php

include 'data\inputs_data.php';

foreach ($inputs1 as $value) {
    echo'<div class="' . $value['col'] . '">
    <input type="' . $value['type'] . '" class="bg-grey form-control rounded-0" id="' . $value['id'] . '" placeholder="' . $value['placeholder'] . '"
       aria-label="' . $value['placeholder'] . '"> <!-- input du nom -->
 </div>';
}