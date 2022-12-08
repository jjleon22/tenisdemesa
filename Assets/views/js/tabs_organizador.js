document.addEventListener("DOMContentLoaded", function (event) {
    pillActive(0);
});

let pestanaActiva = 0;

function pillActive(activo) {
    let tabsId = ["tabPartidos", "tabParticipantes", "tabHoteles", "tabSalas", "tabCiudad", "tabHistorico"];
    let tabsName = ["Partidos", "Participantes", "Hoteles", "Salas", "Ciudades", "Historico Campeonatos"];
    document.getElementById(tabsId[pestanaActiva]).innerHTML =
        `<li class="nav-item" id="${tabsId[pestanaActiva]}">
    <button class="nav-link" onclick="pillActive(${pestanaActiva})">${tabsName[pestanaActiva]}</button>
    </li>
    `;
    document.getElementById(tabsId[activo]).innerHTML =
        `<li class="nav-item" id="${tabsId[activo]}">
    <button class="nav-link active" onclick="pillActive(${activo})">${tabsName[activo]}</button>
    </li>
    `;
    pestanaActiva = activo;
    cargarTabla(activo);
}

function cargarTabla(activo) {
    let columns = [`
        <th scope="col">#</th>
        <th scope="col">Fecha</th>
        <th scope="col">Juez</th>
        <th scope="col">Jugador 1 </th>
        <th scope="col">Jugador 2</th>
        <th scope="col">Marcador</th>
        <th scope="col">Comentarios</th>
        <th scope="col">Sala</th>
        <th scope="col">Entradas Vendidas</th>`, `<th scope="col"># Asociado</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Nivel de Juego</th>
        <th scope="col">Correo</th>
        <th scope="col">Ciudad</th>
        `];
    let tabla = `
    <table class="table" id="tbOrganizador">
          <thead>
            <tr>
              ${columns[activo]}
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
           </tbody>
        </table>`;
    document.getElementById("tbOrganizador").innerHTML = tabla;
}

