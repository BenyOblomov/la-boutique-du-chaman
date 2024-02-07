<section class="container-md w-66 m-auto">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mx-0 mx-md-5 d-flex justify-content-center">
        <div class="col w-50">
        <div class="card border border-4">
            <img src="assets/img/<?=$product['path']?>.png" class="card-img-top rounded-0 h-50 <?=(strpos($product['path'], "elixir") !== 0 ? "p-4" : "")?>" alt="Raisins">
            <div class="card-body">
                <h4 class="card-title text-uppercase fw-bold"><?=$product['name']?></h4>
                <h4 class="card-title">Prix : <?=$product['price']?>$</h4>
                <h4 class="card-title">Type : <?=$product['type']?></h4>
                <?=getStar($product['note'])?>
                <p class="card-text"><?=$product['description']?></p>
                <button type="button" class="btn btn-outline-dark text-uppercase fw-bold ">Acheter</button>
            </div>
        </div>
        </div>
    </div>
</section>
