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
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modaltabParticipantesCrear">Crear Registro</button>
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
                <span class="input-group-text" id="basic-addon1">ID Partido</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Numero Asociado" aria-describedby="basic-addon1" id="txt_id_partido">
                <span class="input-group-text" id="basic-addon2">Fecha de partido</span>
                <input type="date" class="form-control" value="2022-12-20" aria-describedby="basic-addon2" id="fecha_de_juego">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Sala</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lst_sala_partido">
                <option value="1" selected>Sala seleccionada</option>
<<<<<<< HEAD
                    <!-- Consulta de id salas -->
                  <?php /*require '/Controller/Sala.php'; 
                  foreach( as $row)
                  {
                    ?>
                    <option value="<?php echo $row['id_sala']?>"><?php echo $row['id_sala']?></option>
                    <?php
                  }*/
                  ?>

                  
                  
=======
>>>>>>> checho2
                  <option value="3">2</option>
                  <option value="4">3</option>
                </select>
                <span class="input-group-text" id="basic-addon4">Entradas vendidas</span>
                <input type="number" class="form-control" id="num_entradas_vendidas" aria-describedby="basic-addon3">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon5">Juez</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="numero_asociado_juez">
                <!--LLAMAR LISTA JUECES--> 
                <option value="20008 - Paco Rabone" selected>Juaz seleccionada</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon6">Jugador 1</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="numero_asociado_jugador1">
                <!--LLAMAR LISTA JUGADOR-->  
                <option value="1" selected>Juagdor seleccionada</option>
                  <option value="2">1</option>
                  <option value="3">2</option>
                  <option value="20000 - Juan Tenerife">20000 - Juan Tenerife</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon7">Jugador 2</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="numero_asociado_jugador2">
                <!--LLAMAR LISTA JUGADOR-->    
                <option value="1" selected>Juagdor seleccionada</option>
                  <option value="20002 - Crespo Young">20002 - Crespo Young</option>
                  <option value="3">2</option>
                  <option value="4">3</option>
                </select>
              </div>

              <label for="basic-url" class="form-label">Marcador del partido</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon4">Juagdor 1</span>
                <input type="number" class="form-control" id="marcador" aria-describedby="basic-addon3">
                <span class="input-group-text" id="basic-addon4">Juagdor 2</span>
                <input type="number" class="form-control" id="marcador" aria-describedby="basic-addon3">
              </div>

              <label for="basic-url" class="form-label">Ganador del partido</label>
              <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" id="numero_asociado_ganador" value="numero_asociado_jugador1" checked name="gruop_ganandor">
                </div>
                <label class="form-control" for="chk_j1">1</label>
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" id="numero_asociado_ganador" value="numero_asociado_jugador2" name="gruop_ganandor">
                </div>
                <label class="form-control" for="chk_j2">2</label>
              </div>


              <div class="input-group">
                <span class="input-group-text">Comentarios</span>
                <textarea class="form-control" aria-label="With textarea" id="comenatrios"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar Cambios</button>
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
                <input type="text" class="form-control" placeholder="Username" aria-label="Numero Asociado" aria-describedby="basic-addon1" id="numero_asociado" value="">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="nombre" value="Juane Freio">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="direccion" value="Calle 9 # 38 - 75">
                <span class="input-group-text" id="basic-addon4">Email</span>
                <input type="email" class="form-control" id="correo" aria-describedby="basic-addon3" value="juaneFrio@lbpp.com">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Nivel de juego</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="nivel_juego">
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_ciudad">
                <!--LLAMAR LISTA CIUDAD-->  
                <option value="20008 - Paco Rabone" selected>1 - Cali</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
                <span class="input-group-text" id="basic-addon5">Rol</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_rol">
                  <option value="1" selected>1 - Admin</option>
                  <option value="2">2 - Organizador</option>
                  <option value="3">3 - Jugador</option>
                  <option value="4">4 - Juez</option>
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
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="nombre" value="">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="direccion" value="Carrera 7A # 46-75">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar Cambios</button>
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_hotel">
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
                <input type="text" class="form-control" placeholder="capacidad" aria-label="capacida" aria-describedby="basic-addon1" id="capacidad" value="">
              </div>
              <div id="chk_medios">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_tv" checked>
                  <label class="form-check-label" for="chk_tv">Televisor</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_proyector">
                  <label class="form-check-label" for="chk_proyector">Proyector</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_computador" checked>
                  <label class="form-check-label" for="chk_computador">Computador</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_camaras" checked>
                  <label class="form-check-label" for="chk_camaras">Camaras</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_microfono" checked>
                  <label class="form-check-label" for="chk_microfono">Microfono</label>
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
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="nombre" value="Cali">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"># Clubes</span>
                <input type="number" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="num_clubes" value="4">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar Cambios</button>
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
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="nombre" value="PP 1">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Ciudad</span>
<<<<<<< HEAD
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_ciudad">
=======
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ganador_c">
>>>>>>> checho2
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
      <!--fin modal campeonato-->
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
      </div>
      <!--fin modal eliminar-->
      <!-- Modal Crear Partido -->
      <div class="modal fade modal-xl" id="modaltabPartidosCrear" tabindex="-1" aria-labelledby="modaltabPartidosCrear" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabPartidosCrear">Crear Partido</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Fecha de partido</span>
                <input type="date" class="form-control" value="2022-12-20" aria-describedby="basic-addon2" id="dt_fecha_crear">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Sala</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_sala_crear">
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_juez_crear">
                  <option value="20008 - Paco Rabone" selected>Juaz seleccionada</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon6">Jugador 1</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_j1_crear">
                  <option value="1" selected>Juagdor seleccionada</option>
                  <option value="2">1</option>
                  <option value="3">2</option>
                  <option value="20000 - Juan Tenerife">20000 - Juan Tenerife</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon7">Jugador 2</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_j2_crear">
                  <option value="1" selected>Juagdor seleccionada</option>
                  <option value="20002 - Crespo Young">20002 - Crespo Young</option>
                  <option value="3">2</option>
                  <option value="4">3</option>
                </select>
              </div>

              <label for="basic-url" class="form-label">Marcador del partido</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon4">Juagdor 1</span>
                <input type="number" class="form-control" id="txt_j1_crear" aria-describedby="basic-addon3">
                <span class="input-group-text" id="basic-addon4">Juagdor 2</span>
                <input type="number" class="form-control" id="txt_j2_crear" aria-describedby="basic-addon3">
              </div>

              <label for="basic-url" class="form-label">Ganador del partido</label>
              <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" id="chk_j1_crear" value="1" checked name="gruop_ganandor">
                </div>
                <label class="form-control" for="chk_j1_crear">1</label>
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" id="chk_j2_crear" value="2" name="gruop_ganandor">
                </div>
                <label class="form-control" for="chk_j2_crear">2</label>
              </div>
              <div class="input-group">
                <span class="input-group-text">Comentarios</span>
                <textarea class="form-control" aria-label="With textarea" id="txt_comentarios_crear"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="crearRegistro(0)">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin crear modal partido-->
      <!-- Modal Crear Participante -->
      <div class="modal fade modal-xl" id="modaltabParticipantesCrear" tabindex="-1" aria-labelledby="modaltabParticipantesCrear" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabParticipantesCrear">Crear Participante</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_p_crear">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="txt_direccion_p_crear">
                <span class="input-group-text" id="basic-addon4">Email</span>
                <input type="email" class="form-control" id="txt_email_p_crear" aria-describedby="basic-addon3" value="@lppb.com">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Nivel de juego</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_nivel_p_crear">
                  <option value="1" selected >1</option>
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
                <span class="input-group-text" id="basic-addon5">Ciudad</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ciudad_p_crear">
                  <option value="20008 - Paco Rabone" selected>1 - Cali</option>
                  <option value="20010 - Paco Rabone">1</option>
                  <option value="20009 - Paco Rabone">20009 - Paco Rabone</option>
                  <option value="4">3</option>
                </select>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Crear</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal crear particpante-->
      <!-- Modal crear Hotel -->
      <div class="modal fade modal-xl" id="modaltabHotelCrear" tabindex="-1" aria-labelledby="modaltabHotelCrear" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabHotelCrear">Crear Hotel</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_h_crear">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="txt_direccion_h_crear">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!--fin modal crear hotel-->
      <!-- Modal crear Sala -->
      <div class="modal fade modal-xl" id="modaltabSalasCrear" tabindex="-1" aria-labelledby="modaltabSalasCrear" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabSalasCrear">Crear Sala</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Hotel Asociado</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_hoteles_sala_crear">
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
                <input type="text" class="form-control" placeholder="capacidad" aria-label="capacida" aria-describedby="basic-addon1" id="txt_capacidad_sala_crear">
              </div>
              <div id="chk_medios">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_tv_crear">
                  <label class="form-check-label" for="chk_tv_crear">Televisor</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_proyector_crear">
                  <label class="form-check-label" for="chk_proyector_crear">Proyector</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_computador_crear">
                  <label class="form-check-label" for="chk_computador_crear">Computador</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_camaras_crear">
                  <label class="form-check-label" for="chk_camaras_crear">Camaras</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="chk_microfono_crear">
                  <label class="form-check-label" for="chk_microfono_crear">Microfono</label>
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
      <!--fin modal crear sala-->
      <!-- Modal crear Ciudad -->
      <div class="modal fade modal-xl" id="modaltabCiudadCrear" tabindex="-1" aria-labelledby="modaltabCiudadCrear" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabCiudadCrear">Crear Ciudad</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_ciudad_crear">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"># Clubes</span>
                <input type="number" class="form-control" placeholder="Direccion" aria-label="Direccion" aria-describedby="basic-addon1" id="txt_num_clubes_crear">
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
       <div class="modal fade modal-xl" id="modaltabHistoricoCrear" tabindex="-1" aria-labelledby="modaltabHistoricoCrear" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modaltabHistoricoCrear">Crear Campeonato</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titulo</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1" id="txt_nombre_c_crear">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Ciudad</span>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ganador_c_crear">
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="list_ganador_c_crear">
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
      <!--fin modal campeonato-->
    </div>
    <!--fin contenido-->
    <script src="<?php echo BASE_URL; ?>View/js/tabs_organizador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>