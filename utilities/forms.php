<!-- Formulaire de tri et de recherche -->
<div class="d-flex justify-content-around align-items-center">
    <!-- Formulaire de tri -->
    <form class="d-flex m-2 col-3" method="post" action="produits.php">
        <select class="form-select" name="trier" aria-label="Default select example">
            <option value="price ASC">Prix croissant</option>
            <option value="price DESC">Prix décroissant</option>
            <option value="note DESC">Les mieux notés</option>
        </select>
        <button class="btn btn-outline-warning h-25" type="submit">Trier</button>
    </form>
    <!-- Formulaire de recherche -->
    <form class="d-flex" role="search" method="post">
        <input class="form-control h-25" name="search" id="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-warning h-25" type="submit">Recherche</button>
    </form>
</div>