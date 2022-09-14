<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <!-- FontAwesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style/main.css" />
  <title>Films et Séries | Publier un film</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <i class="bi bi-film w-50"></i> Films et Séries
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php"><i class="fa-solid fa-house"></i> </i> Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./create.php"><i class="fa-solid fa-pencil"></i></i> Publier un film/série</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <?php

  function loadClass(string $class)
  {
    if ($class === "DotEnv") {
      require_once "../Config/$class.php";
    } elseif (str_contains($class, "Controller")) {
      require_once "../Controller/$class.php";
    } else {
      require_once "../Entity/$class.php";
    }
  }

  spl_autoload_register("loadClass");

  $categoryController = new CategoryController();
  $categories = $categoryController->getAll();

  if ($_POST) {
    $movieController = new VideoController();
    $newMovie = new Video($_POST);
    $movieController->create($newMovie);
    echo "<script>window.location='../index.php'</script>";
  }

  ?>

  <main class="container-fluid mx-auto w-75">
    <h3 class="text-center mt-5 mb-3">Publier un nouveau film/série</h3>

    <form method="POST" class="container-fluid w-50 mb-5 p-4 bg-light border border-secondary rounded">
      <label for="radio" class="form-label">Type: </label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="type_video" id="movie" value="Film">
        <label class="form-check-label" for="movie">
          Film
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="type_video" id="tvShow" value="Serie">
        <label class="form-check-label" for="tvShow">
          Série
        </label>
      </div>
      <br><br>

      <label for="title" class="form-label">Titre</label>
      <input type="text" name="title" placeholder="Titre du film/série" class="form-control" />
      <br>

      <label for="director" class="form-label">Réalisateur</label>
      <input type="text" name="director" placeholder="Réalisateur du film/série" class="form-control" />
      <br>

      <label for="synopsis" class="form-label">Résumé</label>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Le résumé du film" class="form-control"></textarea>
      <br>
      <label for="imageUrl" class="form-label">Image</label>
      <input type="url" name="image_url" id="image_url" placeholder="L'URL de l'image du film/série" class="form-control" />
      <br>

      <label for="trailer_Url" class="form-label">Bande annonce</label>
      <input type="url" name="trailer_url" id="trailer_url" placeholder="L'URL de la bande annonce du film/série" class="form-control" />
      <br>

      <label for="releaseDate" class="form-label">Date de sortie</label>
      <input type="date" name="release_date" id="release_date" class="form-control" />
      <br>

      <label for="category_id" class="form-label">Catégorie de film/série :</label>
      <select name="category_id" id="category_id" class="form-select">
        <option value="" selected>--Sélectionner une catégorie --</option>

        <?php foreach ($categories as $category) : ?>
          <option value="<?= $category->getId() ?>"><?= $category->getName(); ?></option>
        <?php endforeach ?>
      </select>
      <div class="d-flex justify-content-center">.
        <input type="submit" value="Publier" class="btn btn-primary mt-4 w-100" />
      </div>
    </form>
  </main>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>