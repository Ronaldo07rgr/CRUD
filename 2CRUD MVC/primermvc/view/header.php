<!DOCTYPE html>
<html lang="es">

<head>
  <title>CRUD MVC PHP + MySQL</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles-header.css">
  <link rel="stylesheet" href="assets/css/styles-footer.css">
  <link rel="stylesheet" href="assets/css/styles-provee-nuevo.css">
  <link rel="stylesheet" href="assets/css/styles-provee.css">
  <link rel="stylesheet" href="assets/css/styles-product.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="button">
                <span><a href="index.php" class="text-decoration-none">inicio</a></span>
              </button>
            </li>
            <li class="nav-item">
              <button class="button">
                <span><a href="?c=proveedor" class="text-decoration-none ">Proveedores</a></span>
              </button>
            </li>
            <li class="nav-item">
              <button class="button">
                <span><a href="?c=producto" class="text-decoration-none">Productos</a></span>
              </button>
            </li>
            <li class="nav-item">
              <button class="button">
                <span><a href="#" class="text-decoration-none">contactos</a></span>
              </button>
            </li>
          </ul>
        </div>

        <form class="d-flex form">
          <div class="input-wrapper">
            <button class="icon" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="25px" width="25px">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="white"
                  d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z">
                </path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="white" d="M22 22L20 20">
                </path>
              </svg>
            </button>
            <input placeholder="Search.." class="input-header" name="text" type="text">
          </div>
        </form>

      </div>
    </nav>
  </header>
</body>