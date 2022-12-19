<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ping Pow Bogota 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ping Pow Bogota</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Sigue el torneo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <!--if si es rol 3
            <li class="nav-item">
              <a class="nav-link" href="#">Gestion</a>
            </li>-->
          </ul>
          <!--se debe elegir uno u otro segun si ya inicio sesion-->
          <li style="list-style: none;"></li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin"
            aria-controls="offcanvasLogin">
            Login
          </button>
        </div>
      </div>
    </nav>
    <!--fin navbar-->

    <!--login-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin" aria-labelledby="offcanvasLoginLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLoginLabel">
          Login
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <form action="" id="frmlogeo">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="clave" class="form-control" id="clave" />
          </div>
          <button type="button" class="btn btn-primary mt-5" onclick="logeo()">Enviar</button>
         
          <br><br>
          <p class="fw-lighter">Login to see your tournament data</p>
        </form>
      </div>
    </div> <!--fin login-->

    <!--contenido main-->
    <div class="container text-center mt-3">
      <div class="row">
        <div class="col">
          <h1>
            Torneo Ping Pow Bogota 2022
          </h1>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col">
          <span class="mt-5 fw-lighter">
            Sigue a los mejores 16 de todo el pais
          </span>
        </div>
      </div>
      <!--brackets-->
      <div>
      <div class="row">
        <div class="col"><span id="txt_8_p1_j1">Mariana Rosa</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p1_j2" class="badge text-bg-success">Juan Tenerife</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p1_j1" class="badge text-bg-light">Juan Tenerife</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p1_j2" class="badge text-bg-light">Juene Freio</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p2_j1">Sergio Dominguez</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p2_j2" class="badge text-bg-success">Juene Freio</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_2_p1_j1" class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_2_p1_j2" class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p3_j1" class="badge text-bg-success">Crespo Young</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p3_j2">Camilo Diaz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p2_j1" class="badge text-bg-light">Crespo Young</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p2_j2" class="badge text-bg-light">Camilo Cruz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p4_j1" class="badge text-bg-success">Camilo Cruz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p4_j2">Fede Valde</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_1_p1_j1" class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
  <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
</svg></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_1_p1_j2" class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span id="txt_ganador" class="badge text-bg-danger">Ganador</span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p5_j1" class="badge text-bg-success">Pedro Landia</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p5_j2">Peter Cuervo</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p3_j1" class="badge text-bg-light">Pedro Landia</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p3_j2" class="badge text-bg-light">July Combita</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p6_j1" class="badge text-bg-success">July Combita</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p6_j2">Sara Diaz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_2_p2_j1" class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_2_p2_j2" class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p7_j1" class="badge text-bg-success">Julian Grande</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p7_j2">Cesar Curzarao</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p4_j1" class="badge text-bg-light">Julian Grande</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span id="txt_4_p4_j2" class="badge text-bg-light">Rocio Gehirn</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span id="txt_8_p8_j1" class="badge text-bg-success">Rocio Gehirn</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span  id="txt_8_p8_j2">Emilia Zambrano</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
    </div> <!--fin brackets-->
    </div> <!--fin contenido-->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>View/js/login.js"></script>
    <script src="<?php echo BASE_URL; ?>View/js/index.js"></script>
  </body>

</html>