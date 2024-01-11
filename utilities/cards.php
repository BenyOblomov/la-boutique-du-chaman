<?php 
    echo '<div class="col">
        <div class="card border border-4">
        <img src="assets/img/' . $value['image'] . '.png" class="card-img-top rounded-0 ' . (strpos($value['image'], "elixir") !== 0 ? "p-3" : "") . '" alt="Raisins">
        <div class="card-body">
            <h4 class="card-title text-uppercase fw-bold">' . $value ['name'] . '</h4>
            <p class="card-text">'. $value['description'] .'</p>
            <button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">acheter</button>
        </div>
        </div>
    </div>';
?>