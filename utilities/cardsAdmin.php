<div class="col">
    <div class="card border border-4 h-100">
        <img src="assets/img/<?=$value['path']?>.png" class="card-img-top rounded-0 h-50 <?=(strpos($value['path'], "elixir") !== 0 ? "p-4" : "")?>" alt="Raisins">
        <div class="card-body">
            <h4 class="card-title text-uppercase fw-bold"><?=$value['name']?></h4>
            <h4 class="card-title">Prix : <?=$value['price']?>$</h4>
            <h4 class="card-title">Type : <?=$value['type']?></h4>
            <?=getStar($value['note'])?>
            <p class="card-text"><?=$value['description']?></p>
            <div class="d-flex justify-content-around">
            <a href="updateOne.php?id=<?=$value['id']?>"><button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">Modifier</button></a>
            </div>
        </div>
    </div>
</div>

