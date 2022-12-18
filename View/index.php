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
          <li style="list-style: none;" id="txt_nombre">nn</li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <button class="btn btn-danger" type="button">
            <a href="index.html" style="text-decoration: none; color:white" onclick="cerrar_sesion()">Cerrar Sesion</a>
          </button>
        </div>
      </div>
    </nav>
    <!--fin navbar-->

<<<<<<< Updated upstream

=======
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
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
      <ul class="nav nav-pills">
        <li class="nav-item" id="tabPartidos">
          <button class="nav-link active" onclick="pillActive(0)">Partidos</button>
        </li>
        <li class="nav-item" id="tabParticipantes">
          <button class="nav-link" onclick="pillActive(1)">Participantes</button>
        </li>
        <li class="nav-item" id="tabHotel">
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
      <!--fin contendio admon-->

      <!-- Modal Partido -->
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
      <!--fin modal partido-->
      <!-- Modal Participante -->
      <div class="modal fade modal-xl" id="modaltabParticipantes" tabindex="-1" aria-labelledby="modaltabParticipantes" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabParticipantes">Modificar Participante</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"># Asociado</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Numero Asociado" aria-describedby="basic-addon1" id="txt_num_asociado_p" value="20001">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_p" value="Juane Freio">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="txt_direccion_p" value="Calle 9 # 38 - 75">
                <span class="input-group-text" id="basic-addon4">Email</span>
                <input type="email" class="form-control" id="txt_email" aria-describedby="basic-addon3" value="juaneFrio@lbpp.com">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Nivel de juego</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_nivel_p">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5" selected>5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <span class="input-group-text" id="basic-addon5">Ciudad</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ciudad_p">
                  <option value="20008 - Paco Rabone" selected>1 - Cali</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
                <span class="input-group-text" id="basic-addon5">Rol</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_rol_p">
                  <option value="20008 - Paco Rabone" selected>1 - Admin</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal particpante-->
      <!-- Modal Hotel -->
      <div class="modal fade modal-xl" id="modaltabHotel" tabindex="-1" aria-labelledby="modaltabHotel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabHotel">Modificar Hoteles</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_h" value="B de BAKATA">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="txt_direccion_h" value="Carrera 7A # 46-75">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal hotel-->
      <!-- Modal Sala -->
      <div class="modal fade modal-xl" id="modaltabSalas" tabindex="-1" aria-labelledby="modaltabSalas" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabSalas">Modificar Sala</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Hotel Asociado</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_hoteles_sala">
                  <option value="1" selected>1 - B de BAKATA</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <span class="input-group-text" id="basic-addon1">Capacidad sala</span>
                <input type="text" class="form-control" placeholder="capacidad" aria-label="capacida" aria-describedby="basic-addon1" id="txt_capacidad_sala" value="40">
              </div>
              <div id="chk_medios">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_tv" checked>
                  <label class="form-check-label" for="chk_tv">Televisor</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_imp">
                  <label class="form-check-label" for="chk_imp">Proyector</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_imp" checked>
                  <label class="form-check-label" for="chk_imp">Computador</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_imp" checked>
                  <label class="form-check-label" for="chk_imp">Camaras</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_imp" checked>
                  <label class="form-check-label" for="chk_imp">Microfono</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal sala-->
      <!-- Modal Ciudad -->
      <div class="modal fade modal-xl" id="modaltabCiudad" tabindex="-1" aria-labelledby="modaltabCiudad" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabCiudad">Modificar Ciudad</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_ciudad" value="Cali">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"># Clubes</span>
                <input type="number" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="txt_num_clubes" value="4">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal Ciudad-->
      <!-- Modal Campeonato -->
      <div class="modal fade modal-xl" id="modaltabHistorico" tabindex="-1" aria-labelledby="modaltabHistorico" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabHistorico">Modificar Campeonato</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titulo</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_c" value="PP 1">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Ciudada</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ganador_c">
                  <option value="1" selected>3 - Cucuta</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Ganador</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ganador_c">
                  <option value="1" selected>20003 - Camilo Cruz</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal Ciudad-->
      <!-- Modal Elimianr -->
      <div class="modal fade" id="modalEliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalEliminar">Elimiar Registro</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Esta seguro que desea elmimar este registro</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
          </div>
        </div>
=======
      <!--brackets-->
      <div>
      <div class="row">
        <div class="col"><span>Mariana Rosa</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Juan Tenerife</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Juan Tenerife</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Juene Freio</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Sergio Dominguez</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Juene Freio</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Crespo Young</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Camilo Diaz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Crespo Young</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Camilo Cruz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Camilo Cruz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Fede Valde</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
  <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
</svg></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span class="badge text-bg-danger">Ganador</span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Pedro Landia</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Peter Cuervo</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Pedro Landia</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>July Combita</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">July Combita</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Sara Diaz</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span class="badge text-bg-light">Por Jugar</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Julian Grande</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Cesar Curzarao</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Julian Grande</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>Rocio Gehirn</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span class="badge text-bg-success">Rocio Gehirn</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>Emilia Zambrano</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
>>>>>>> Stashed changes
      </div>
      <!--fin modal eliminar-->
    </div>
    <!--fin contenido-->
    <script src="<?php echo BASE_URL; ?>View/js/tabs_organizador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>