<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- FontAwesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style/main.css" />
    <title>Films et Séries | Publier un film</title>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <i class="bi bi-film w-50"></i> Films et Séries
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="../index.php"
                  ><i class="fa-solid fa-house"></i> </i> Accueil</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./create.php"
                  ><i class="fa-solid fa-pencil"></i></i> Publier un film/série</a
                >
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main class="container-fluid mx-auto">
      <h3 class="text-center mt-5">Publier un nouveau film/série</h3>

      <form method="POST" class="container-fluid w-50">
      <select name="typeId" id="type" class="form-select">
          <option value="" selected>--Sélectionner un type --</option>
          <option value="1">Film</option>
          <option value="2">Série</option>
        </select>
        <label for="title" class="form-label">Titre</label>
        <input
          type="text"
          name="title"
          placeholder="Titre du film/série"
          class="form-control"
        />
        <label for="synopsis" class="form-label">Résumé</label>
        <textarea
          name="synopsis"
          id="synopsis"
          cols="30"
          rows="10"
          placeholder="Le résumé du film"
          class="form-control"
        ></textarea>
        <label for="imageUrl" class="form-label">Image</label>
        <input
          type="url"
          name="imageUrl"
          id="imageUrl"
          placeholder="L'URL de l'image du film/série"
          class="form-control"
        />
        <label for="releaseDate" class="form-label">Date de sortie</label>
        <input
          type="date"
          name="releaseDate"
          id="releaseDate"
          class="form-control"
        />
        <select name="categoryId" id="category" class="form-select">
          <option value="" selected>--Sélectionner une catégorie --</option>
          <option value="1">Action</option>
          <option value="2">Comédie</option>
          <option value="3">Science fiction</option>
          <option value="4">Aventure</option>
          <option value="5">Animation</option>
          <option value="6">Auteur</option>
          <option value="7">Horreur</option>
          <option value="8">Romantique</option>
          <option value="9">Bollywood</option>
          <option value="10">Drame</option>
        </select>
        <input
          type="submit"
          value="Publier"
          class="btn btn-primary"
          class="form-control center"
        />
      </form>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
