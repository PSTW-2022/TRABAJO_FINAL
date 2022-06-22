<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>DentalApp</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #15326A">
        <a href="" class="link-light"><img src="../assets/diente.png" alt="logo"></a>
        <div class="container-fluid">
          <a class="navbar-brand link-light" href="#">Dental App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link link-light active" aria-current="page" href="#"><i class="bi bi-person-circle"></i> Iniciar sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-light active" aria-current="page" href="#"><i class="bi bi-card-list"></i> lista de precios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  link-light active" href="#"><i class="bi bi-file-word"></i> Gestión trabajos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-light active" href="#"><i class="bi bi-info-circle-fill"></i> Ayuda</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('navegacion')
</body>
</html>