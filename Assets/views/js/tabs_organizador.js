document.addEventListener("DOMContentLoaded", function(event) {
    pillActive(0);
});

let pestanaActiva = 0;

function pillActive(activo)
{
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
}

