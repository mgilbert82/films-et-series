<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- FontAwesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="./style/main.css" />
  <title>Films et Séries | Accueil</title>
</head>

<body>
  <?php

  function loadClass(string $class)
  {
    if ($class === "DotEnv") {
      require_once "./Config/$class.php";
    } elseif (str_contains($class, "Controller")) {
      require_once "./Controller/$class.php";
    } else {
      require_once "./Entity/$class.php";
    }
  }

  spl_autoload_register("loadClass");


  $videoController = new VideoController();
  $categoryController = new CategoryController();
  $movies = $videoController->getAll();
  $categories = $categoryController->getAll();
  ?>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <i class="bi bi-film w-50"></i> Films et Séries
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php
                  "><i class="fa-solid fa-house"></i> </i> Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/create.php"><i class="fa-solid fa-pencil"></i></i> Publier un film</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Rechercher
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main class="container mt-5 pt-5">
    <h1>Vos films et séries préférées !!!</h1>
    <h3>Découvrez et partagez tout l'univers du 7ème art !!</h3>
    <img src="./images/logo-FS.svg" alt="Logo My movies" class="logo" />

    <section class="container d-flex justify-content center mt-5">

      <?php
      foreach ($movies as $movie) :
        $category = $categoryController->get($movie->getCategory_id());
        $release_date = new DateTime($movie->getRelease_date());
      ?>

        <div class="card m-3 bg-light" style="width: 18rem">
          <img src="<?= $movie->getImage_url() ?>" class="card-img-top" alt="<?= $movie->getTitle() ?>" />
          <div class="card-body">
            <h5 class="card-title"><?= $movie->getTitle() ?></h5>
            <h6 class="card-subtitle text-muted"><?= $movie->getDirector() ?></h6>
            <p class="card-subtitle mt-3 text-muted">Date de sortie: <?= $release_date->format('d/m/Y') ?></p>
            <p class="card-text mt-4"><?= $movie->getDescription() ?></p>
            <p class="blockquote-footer mt-4" style="color:<?= $category->getColor(); ?>"><?= $category->getName(); ?></p>
            <p><a href="<?= $movie->getTrailer_url() ?>" class="link-info mx-auto" target="_blank"><i class="bi bi-play-circle-fill"></i> Bande Annonce</a></p>
            <a href="./views/update.php" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="./views/delete.php?id=<?= $movie->getId() ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer"><i class="fa-solid fa-trash"></i></a>
          </div>
        </div>

      <?php endforeach; ?>
    </section>
  </main>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="./scripts/scripts.js"></script>
</body>

</html>