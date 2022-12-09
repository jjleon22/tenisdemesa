<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ping Pow Bogota</title>
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
              <a class="nav-link" aria-current="page" href="#">Sigue el torneo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Gestion</a>
              </li>
          </ul>
          <li style="list-style: none;">Hola Juan</li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <button class="btn btn-danger" type="button">
            <a href="index.html" style="text-decoration: none; color:white">Cerrar Sesion</a>
          </button>
        </div>
      </div>
    </nav>
    <!--fin navbar-->

    

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
      <ul class="nav nav-pills">
        <li class="nav-item" id="tabPartidos">
          <button class="nav-link active" onclick="pillActive(0)">Partidos</button>
        </li>
        <li class="nav-item" id="tabParticipantes">
          <button class="nav-link" onclick="pillActive(1)">Participantes</button>
        </li>
        <li class="nav-item" id="tabHoteles">
          <button class="nav-link" onclick="pillActive(2)">Hoteles</button>
        </li>
        <li class="nav-item" id="tabSalas">
          <button class="nav-link" onclick="pillActive(3)">Salas</button>
        </li>
        <li class="nav-item" id="tabCiudad">
            <button class="nav-link" onclick="pillActive(4)">Ciudades</button>
          </li>
        <li class="nav-item" id="tabHistorico">
            <button class="nav-link" onclick="pillActive(5)">Historico Campeonatos</button>
        </li>
      </ul>
      <div class="container-md mt-5">
        <!--contenido administrativo-->
        <table class="table" id="tbOrganizador">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fecha</th>
              <th scope="col">Juez</th>
              <th scope="col">Jugador 1 </th>
              <th scope="col">Jugador 2</th>
              <th scope="col">Marcador</th>
              <th scope="col">Comentarios</th>
              <th scope="col">Sala</th>
              <th scope="col">Entradas Vendidas</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">1</th>
              <td>Mark&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jacob</td>
              <td>Thornton&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>@twitter</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jacob</td>
              <td>Thornton&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>@twitter</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;<img src="resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
            </tr>
            
          </tbody>
        </table>
        <div class="d-grid gap-2" id="btnCrear">
          <button class="btn btn-primary" type="button">Crear Registro</button>
        </div>
      </div>
      
    </div> <!--fin contenido-->
  </div>
  <script src="<?php echo BASE_URL;?>View/js/tabs_organizador.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"></script>
</body>

</html>