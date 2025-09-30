<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio - Mi Proyecto</title>
  <link rel="shortcut icon" type="image/png" href="./View/images/logos/favicon.png" />
  <link rel="stylesheet" href="./View/css/styles.min.css" />
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Navbar -->
    <header class="py-3 bg-light d-flex justify-content-between px-4 align-items-center">
      <a href="home.php" class="logo d-flex align-items-center">
        <img src="./View/images/logos/logo.svg" alt="" height="40">
        <span class="ms-2 fw-bold">Mi Proyecto</span>
      </a>
      <nav>
        <a href="home.php" class="me-3">Inicio</a>
        <a href="authentication-login.php" class="me-3">Login</a>
        <a href="authentication-register.php">Registro</a>
      </nav>
    </header>

    <!-- Hero / Bienvenida -->
    <div class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="container text-center">
        <h1 class="display-4 mb-3">Bienvenido a Mi Proyecto</h1>
        <p class="lead mb-4">Explora todas las funcionalidades de nuestro sistema web</p>
        <a href="#" class="btn btn-primary btn-lg rounded-2">Comenzar</a>
      </div>
    </div>

    <!-- Sección de funciones / tarjetas -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row g-4 justify-content-center">

          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Función 1</h5>
                <p class="card-text">Descripción de la primera función de tu sistema.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Función 2</h5>
                <p class="card-text">Otra característica importante del proyecto.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Función 3</h5>
                <p class="card-text">Explicación de una función más del sistema.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-3 bg-light text-center">
      <p class="mb-0">&copy; 2025 Mi Proyecto. Todos los derechos reservados.</p>
    </footer>

  </div>

  <!-- Scripts -->
  <script src="./View/js/jquery/dist/jquery.min.js"></script>
  <script src="./View/js/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
