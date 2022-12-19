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
          <li style="list-style: none;" id="txt_nombre">Hola Paco Rabone</li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <button class="btn btn-danger" type="button">
            <a href="index.html" style="text-decoration: none; color:white" onclick="cerrar_sesion()">Cerrar Sesion</a>
          </button>
        </div>
      </div>
    </nav>
    <!--fin navbar-->
    <div class="container-fluid mt-5">
        <h3>Tus partidos Arbitrados</h3>
        <!--contenido administrativo-->
        <table class="table" id="tbJuez">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fecha</th>
              <th scope="col">Juez</th>
              <th scope="col">Jugador 1</th>
              <th scope="col">Jugador 2</th>
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
              <td>Daniel Torres</td>
              <td>Jacob Tomas</td>
              <td>12-15 &nbsp;&nbsp;<button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalMarcador">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg></button></td>
              <td>Partido de incio duro</td>
              <td>2 </td>
            </tr>
          </tbody>
        </table>
        <!-- Modal Partido -->
      <div class="modal fade modal-xl" id="modalMarcador" tabindex="-1" aria-labelledby="modalMarcador" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalMarcador">Modificar Partido</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Fecha de partido</span>
                <input type="date" class="form-control" value="2022-12-20" aria-describedby="basic-addon2" id="dt_fecha">
              </div>


              <label for="basic-url" class="form-label">Marcador del partido</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon4">Daniel Torres</span>
                <input type="number" class="form-control" id="txt_j1" aria-describedby="basic-addon3" value="12">
                <span class="input-group-text" id="basic-addon4">Jacob Tomas</span>
                <input type="number" class="form-control" id="txt_j2" aria-describedby="basic-addon3" value ="15">
              </div>

              <label for="basic-url" class="form-label">Ganador del partido</label>
              <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" id="chk_j1" value="1" checked name="gruop_ganandor">
                </div>
                <label class="form-control" for="chk_j1">1</label>
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" id="chk_j2" value="2" name="gruop_ganandor">
                </div>
                <label class="form-control" for="chk_j2">2</label>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal partido-->
<!--fin contenido-->
<script src="<?php echo BASE_URL; ?>View/js/juez.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>