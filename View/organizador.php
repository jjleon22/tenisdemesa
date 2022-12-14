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
    <div class="container-fluid text-center mt-3">
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
      <div class="container-fluid mt-5">
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
              <td>Mark&nbsp;&nbsp;</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jacob</td>
              <td>Thornton&nbsp;&nbsp;</td>
              <td>@twitter</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jacob</td>
              <td>Thornton&nbsp;&nbsp;</td>
              <td>@twitter</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;</td>
              <td>Thornton</td>
            </tr>

          </tbody>
        </table>
        <div class="d-grid gap-2" id="btnCrear">
          <button class="btn btn-primary" type="button">Crear Registro</button>
        </div>
      </div>
      <!--finc contendio admon-->

      <!-- Modal -->

      <div class="modal fade modal-xl" id="modaltabPartidos" tabindex="-1" aria-labelledby="modaltabPartidos" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabPartidos">Modificar Partido</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"># Asociado</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Numero Asociado" aria-describedby="basic-addon1" id="txt_num_asociado">
                <span class="input-group-text" id="basic-addon2">Fecha de partido</span>
                <input type="date" class="form-control" value="2022-12-20" aria-describedby="basic-addon2" id="dt_fecha">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Sala</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_sala">
                  <option value="1" selected>Sala seleccionada</option>
                  <option value="2">1</option>
                  <option value="3">2</option>
                  <option value="4">3</option>
                </select>
                <span class="input-group-text" id="basic-addon4">Entradas vendidas</span>
                <input type="number" class="form-control" id="txt_entradas" aria-describedby="basic-addon3">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon5">Juez</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_juez">
                  <option value="20008 - Paco Rabone" selected>Juaz seleccionada</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon6">Jugador 1</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_j1">
                  <option value="1" selected>Juagdor seleccionada</option>
                  <option value="2">1</option>
                  <option value="3">2</option>
                  <option value="20000 - Juan Tenerife">20000 - Juan Tenerife</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon7">Jugador 2</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_j2">
                  <option value="1" selected>Juagdor seleccionada</option>
                  <option value="20002 - Crespo Young">20002 - Crespo Young</option>
                  <option value="3">2</option>
                  <option value="4">3</option>
                </select>
              </div>
              
              <label for="basic-url" class="form-label">Marcador del partido</label>
               <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon4">Juagdor 1</span>
                 <input type="number" class="form-control" id="txt_j1" aria-describedby="basic-addon3">
                 <span class="input-group-text" id="basic-addon4">Juagdor 2</span>
                 <input type="number" class="form-control" id="txt_j2" aria-describedby="basic-addon3">
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


              <div class="input-group">
                <span class="input-group-text">Comentarios</span>
                <textarea class="form-control" aria-label="With textarea" id="txt_comentarios"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal-->
    </div>
    <!--fin contenido-->
    <script src="<?php echo BASE_URL; ?>View/js/tabs_organizador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>