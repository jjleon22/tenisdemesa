document.addEventListener("DOMContentLoaded", function (event) {
  pillActive(0);
});

let pestanaActiva = 0;

function pillActive(activo) {
  let tabsId = [
    "tabPartidos",
    "tabParticipantes",
    "tabHoteles",
    "tabSalas",
    "tabCiudad",
    "tabHistorico",
  ];
  let tabsName = [
    "Partidos",
    "Participantes",
    "Hoteles",
    "Salas",
    "Ciudades",
    "Historico Campeonatos",
  ];
  document.getElementById(
    tabsId[pestanaActiva]
  ).innerHTML = `<li class="nav-item" id="${tabsId[pestanaActiva]}">
    <button class="nav-link" onclick="pillActive(${pestanaActiva})">${tabsName[pestanaActiva]}</button>
    </li>
    `;
  document.getElementById(
    tabsId[activo]
  ).innerHTML = `<li class="nav-item" id="${tabsId[activo]}">
    <button class="nav-link active" onclick="pillActive(${activo})">${tabsName[activo]}</button>
    </li>
    `;
  pestanaActiva = activo;
  cargarTabla(tabsId[activo]);
}

async function cargarTabla(activo) {
  const elegirTabla = {
    tabPartidos: "Partido/getPartidos",
    tabParticipantes: "Participante/getParticipantes",
    tabSalas: "Sala/getSalas",
    tabCiudad: "Ciudad/getCiudades",
    tabHistorico: "Campeonato/getCampeonatos",
  };

  try {
    const request = await fetch(
      `http://localhost/tenisdemesa/${elegirTabla[activo]}`,
      {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }
    );

    const data = await request.json();
    console.log(data);
    const encabezados = Object.keys(data[0]);
    let dataTable = "";
    let columnsTable = "";
    encabezados.forEach((i) => {
      if(i!="numero_asociado_ganador")
        columnsTable += `<th scope="col">${i}</th>`;
    });
    columnsTable += `<th scope="col">Editar</th><th scope="col">Eliminar</th>`;
    data.forEach((i) => {
      console.log("i",i);
      let contHead = 0;
      let valores = "";

      encabezados.forEach((j) => {
        //console.log("j",j)
        if(encabezados.includes("numero_asociado_ganador"))
        {
          if(i["Jugador 1"].includes(i["numero_asociado_ganador"]))
          {
            if(j=="Jugador 1")
            {
              valores += `<td>${i[encabezados[contHead++]]}&nbsp; 
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
              <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
              </svg></td>`;
            }
          }
          else{
            if(j=="Jugador 2")
            {
              valores += `<td>${i[encabezados[contHead++]]}&nbsp;
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
              <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
              </svg></td>`;
            }
          }
        }
        if(j=="Jugador 2")
          contHead++;

        if(contHead<encabezados.length)
          valores += `<td>${i[encabezados[contHead++]]}</td>`;
          
      });
      //suponiendo que el id simpre va a llegar de primeras
      let id = i[encabezados[0]];
      
      valores += `<td><button class="btn btn-warning" type="button" onclick="cargarUno(${activo},${id})" data-bs-toggle="modal" data-bs-target="#modal${activo}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg>
      </button></td><td><button class="btn btn-danger" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg>
      </button></td>`;
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
  } catch (error) {
    console.log(error);
  }
}

async function cargarUno(activo, id) {
  const elegirTabla = {
    tabPartidos: "Partido/getPartido",
    tabParticipantes: "Participante/getParticipante",
    tabSalas: "Sala/getSala",
    tabCiudad: "Ciudad/getCiudad",
    tabHistorico: "Campeonato/getCampeonato",
  };

  try {
    const request = await fetch(
      `http://localhost/tenisdemesa/${elegirTabla[activo]}/${id}`,
      {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }
    );

    const data = response.json();
    console.log(request.url);
    console.log(data);
  } catch (error) {
    console.log(error);
  }

  //datos tmp truncados

  const data = {
    "Comentarios": "El ganador empezo con ventaja",
    "Entradas Vendidas": 50,
    "Fecha": "2022-12-12 22:00:00",
    "Juez":"20009 - Paco Rabone",
    "Jugador 1": "20000 - Juan Tenerife",
    "Jugador 2":"20002 - Crespo Young",
    "Marcador":"15-13",
    "Sala":4,
    "id": 4,
    "numero_asociado_ganador":20000
  }

  if(activo = "tabPartidos")
  {
    let txt_num_asociado = document.getElementById("txt_num_asociado");
    let dt_fecha = document.getElementById("dt_fecha");
    let list_sala = document.getElementById("list_sala");
    let txt_entradas = document.getElementById("txt_entradas");
    let list_juez = document.getElementById("list_juez");
    let list_j1 = document.getElementById("list_j1");
    let list_j2 = document.getElementById("list_j2");
    let txt_j1 = document.getElementById("txt_j1");
    let txt_j2 = document.getElementById("txt_j2");
    let chk_j1 = document.getElementById("chk_j1");
    let chk_j2 = document.getElementById("chk_j2");
    let txt_comentarios = document.getElementById("txt_comentarios");

    txt_num_asociado.value = data["id"];
    dt_fecha.value = data["Fecha"];
    list_sala.value = data["Sala"];
    txt_entradas.value = data["Entradas Vendidas"];
    list_juez.value = data["Juez"];
    list_j1.value = data["Jugador 1"];
    list_j2.value = data["Jugador 2"];
    txt_j1.value = data["Marcador"].split("-")[0];
    txt_j2.value = data["Marcador"].split("-")[1];
    txt_comentarios.value = data["Comentarios"];
    if(list_j1.value.includes(data["numero_asociado_ganador"]))
    {
      chk_j1.checked = true;
      chk_j2.checked = false;
    }
    else{
      chk_j1.checked = false;
      chk_j2.checked = true;
  
    }
  }
  else if(activo = "tabParticipantes")
  {
    
  }
  else if(activo = "tabSalas")
  {
    
  }
  else if(activo = "tabCiudad")
  {
    
  }
  else if(activo = "tabHistorico")
  {
    
  }

  
}
