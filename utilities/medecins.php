<?php
include 'data/medecins_data.php';

foreach ($medecins as $value){
  echo ' <div class="card border m-5" style="width: 35rem;">
    <img src="assets/img/'.$value["image"].'.png" class="card-img-top" alt="...">
      <div class="card-body">
              <h5 class="card-title">'.$value["name"].'</h5>
              <p class="card-text">'.$value["des"].' </p>
      </div>
        <ul class="list-group list-group-flush">
                <li class="list-group-item">'.$value["etude"].'</li>
                <li class="list-group-item">'.$value["prix"].'</li>

        </ul>
      <div class="card-body">
          <button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">reserver un crenaux</button>
      </div>
  </div>';
}
?>