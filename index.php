<?php
// Je stocke le domaine de mon site
$domaine = 'medicament/';

// ici je stocke mes url
$index_page = $domaine;
$produits_page = $domaine . 'produits.php';
$contact_page = $domaine . 'contact.php';

// ici je stocke l'url sur laquelle nous sommes
$current_url = $_SERVER['SCRIPT_NAME'];


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="mb-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    </div>
</nav>
<div class="container-fluid g-0 position-relative">
        <img src="img\banniere1.jpg" class="img-fluid" alt="">
        <h1 class="position-absolute top-50 start-50 translate-middle">La boutique du chaman</h1>
    </div>
    </header>
    <main class="container-fluid d-flex flex-column align-items-center">
        <section class="container-sm d-flex flex-column align-items-center">
            <h2>La boutique du chaman : c'est quoi?</h2>
            <div class="d-flex justify-content-center align-items-center">
            <div class="w-50 m-5 p-5">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum totam, magni cum consequuntur veritatis doloribus doloremque dicta quam, voluptatem officia deserunt? Quisquam eos, minus velit eligendi itaque consequuntur exercitationem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum totam, magni cum consequuntur veritatis doloribus doloremque dicta quam, voluptatem officia deserunt? Quisquam eos, minus velit eligendi itaque consequuntur exercitationem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum totam, magni cum consequuntur veritatis doloribus doloremque dicta quam, voluptatem officia deserunt? Quisquam eos, minus velit eligendi itaque consequuntur exercitationem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim dolorum totam, magni cum consequuntur veritatis doloribus doloremque dicta quam, voluptatem officia deserunt? Quisquam eos, minus velit eligendi itaque consequuntur exercitationem.</p>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide w-50 m-5 p-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\boutique.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\boutique2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\slider2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
            
        </section>
    </main>
    <footer>

    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>