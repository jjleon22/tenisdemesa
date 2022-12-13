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
    cargarTabla(tabsId[activo]);
}



async function cargarTabla(activo) {

  const elegirTabla = {"tabPartidos": "Partido/getPartidos",
  "tabParticipantes":"Participante/getParticipantes",
  "tabSalas":"Sala/getSalas",
  "tabCiudad":"Ciudad/getCiudades",
  "tabHistorico":"Campeonato/getCampeonatos"
};

  const request = await fetch(`http://localhost/tenisdemesa/${elegirTabla[activo]}`, {
    method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        }
  });

  if (request.ok )
  {
    const data = await request.json();
    const encabezados = Object.keys(data[0]);
    let dataTable = "";
    let columnsTable = "";
    encabezados.forEach(i => {
      columnsTable += `<th scope="col">${i}</th>`;
    });
    columnsTable += `<th scope="col">Editar</th><th scope="col">Eliminar</th>`;
    data.forEach(i => {
      //console.log("i",i);
      let contHead = 0;
      let valores = "";
      
      encabezados.forEach((j)=>{
        //console.log("j",j)
        valores += `<td>${i[encabezados[contHead++]]}</td>`;
      })
      valores += `<td><button class="btn btn-danger" type="button">
      <a href="index.html" style="text-decoration: none; color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg></a>
      </button></td><td><button class="btn btn-danger" type="button">
      <a href="index.html" style="text-decoration: none; color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg></a>
      </button></td>`
      dataTable += `
      <tr>${valores}</tr>
        `;
    });
    let tabla = `
      <table class="table" id="tbOrganizador">
        <thead>
          <tr>
            ${columnsTable}
          </tr>
          </thead>
          <tbody class="table-group-divider">
          ${dataTable}
          </tbody>
          </table>`;
      //console.log("🚀 ~ file: tabs_organizador.js:69 ~ cargarTabla ~ tabla", tabla)
      
      document.getElementById("tbOrganizador").innerHTML = tabla;
  }
  else
    console.log("🚀", "No");
  
}

