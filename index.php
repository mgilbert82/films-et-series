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
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <!-- FontAwesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style/main.css" />
    <title>Films et Séries | Accueil</title>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                  class="nav-link active"
                  aria-current="page"
                  href="./index.php
                  "
                  ><i class="fa-solid fa-house"></i> </i> Accueil</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./views/create.php"
                  ><i class="fa-solid fa-pencil"></i></i> Publier un film</a
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
    <main class="container mt-5 pt-5">
      <h1>Vos films et séries préférées !!</h1>
      <h3>Découvrez et partagez tout l'univers du 7ème art !!</h3>
      <img src="./images/logo-FS.svg" alt="Logo My movies" class="logo" />


      <section class="container d-flex">
      <div class="card m-3" style="width: 18rem">
        <img
          src="https://fr.web.img4.acsta.net/pictures/22/08/25/09/04/2146702.jpg"
          class="card-img-top"
          alt="Avatar"
        />
        <div class="card-body">
          <h5 class="card-title">Avatar</h5>
          <h6 class="card-subtitle mb-2 text-muted">Science fiction</h6>

          <p class="card-text">Un film avec des gens bleus</p>
          <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier" 
            ><i class="fa-solid fa-pen-to-square"></i
          ></a>
          <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer"
            ><i class="fa-solid fa-trash"></i
          ></a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem">
        <img
          src="https://fr.web.img6.acsta.net/medias/04/34/49/043449_af.jpg"
          class="card-img-top"
          alt="Matrix"
        />
        <div class="card-body">
          <h5 class="card-title">Matrix</h5>
          <h6 class="card-subtitle mb-2 text-muted">Science Fiction</h6>

          <p class="card-text">A suivre le lapin blanc ..</p>
          <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier" 
            ><i class="fa-solid fa-pen-to-square"></i
          ></a>
          <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer"
            ><i class="fa-solid fa-trash"></i
          ></a>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem">
        <img
          src="data:image/jpeg;base64,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"
          class="card-img-top"
          alt="Kill bill"
        />
        <div class="card-body">
          <h5 class="card-title">Kill Bill</h5>
          <h6 class="card-subtitle mb-2 text-muted">Auteur</h6>

          <p class="card-text">Un film de karaté</p>
          <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier" 
            ><i class="fa-solid fa-pen-to-square"></i
          ></a>
          <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer"
            ><i class="fa-solid fa-trash"></i
          ></a>
        </div>
      </div>
    </section>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script src="./scripts/scripts.js"></script>
  </body>
</html>
