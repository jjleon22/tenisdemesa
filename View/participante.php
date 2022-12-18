<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ping Pow Bogota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ping Pow Bogota</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Sigue el torneo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
          </ul>
          <li style="list-style: none;" id="txt_nombre">Hola Daniel Torres</li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <button class="btn btn-danger" type="button">
            <a href="index.html" style="text-decoration: none; color:white" onclick="cerrar_sesion()">Cerrar Sesion</a>
          </button>
        </div>
      </div>
    </nav>
    <!--fin navbar-->
    <div class="container-fluid mt-5">
        <h3>Tus partidos</h3>
        <!--contenido administrativo-->
        <table class="table" id="tbOrganizador">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fecha</th>
              <th scope="col">Juez</th>
              <th scope="col">Adversario</th>
              <th scope="col">Marcador</th>
              <th scope="col">Comentarios</th>
              <th scope="col">Sala</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">13</th>
              <td>2022-12-12 22:00:00&nbsp;&nbsp;</td>
              <td>20099 - Paco Rabone</td>              
              <td>Jacob Tomas</td>
              <td>12-15</td>
              <td>Partido de incio duro</td>
              <td>2 </td>
            </tr>

          </tbody>
        </table>
        <h3>Tu Hospedaje</h3>
        <p>Hotel Sugerido: B de BAKATA</p>
        <table class="table" id="tbOrganizador">
          <thead>
            <tr>
              <th scope="col">Hotel Elegido</th>
              <th scope="col">Fecha Entrada</th>
              <th scope="col">Fecha Salida</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">Hotel Atrio</th>
              <td>2022-12-06 18:48:37</td>
              <td>2022-12-15 18:48:37</td>              
            </tr>
          </tbody>
        </table>
<!--fin contenido-->
<script src="<?php echo BASE_URL; ?>View/js/tabs_organizador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>