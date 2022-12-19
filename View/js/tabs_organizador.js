document.addEventListener("DOMContentLoaded", function (event) {
  pillActive(0);
  document.getElementById("txt_nombre").innerHTML = `
  <li style="list-style: none;" id="txt_nombre">${sessionStorage.getItem("nombre")}</li>`
  getSalas();
  getParticipante1();
  getJugador();
  getCiudad();
  getHotelito();
});

let pestanaActiva = 0;

function pillActive(activo) {
  let tabsId = [
    "tabPartidos",
    "tabParticipantes",
    "tabHotel",
    "tabSalas",
    "tabCiudad",
    "tabHistorico",
  ];
  let tabsName = [
    "Partidos",
    "Participantes",
    "Hotel",
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
  document.getElementById("btnCrear").innerHTML = `<div class="d-grid gap-2" id="btnCrear">
  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal${tabsId[activo]}Crear">Crear Registro</button>
</div>`;
  pestanaActiva = activo;
  cargarTabla(tabsId[activo]);
}


async function cargarTabla(activo) {
  const elegirTabla = {
    tabPartidos: "Partido/getPartidos",
    tabParticipantes: "Organizador/getParticipantes",
    tabHotel: "Hotel/getHotel",
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
    if(encabezados.includes("Medios Disponibles"))
    {
      var resultData = Object.values(groupBy(data,"Número Sala"));
      resultData.forEach((j)=>{
        let valores = ""
        console.log(j);
        valores += `<td>${j["Número Sala"]}</td>`;
        valores += `<td>${j["Nombre Hotel"]}</td>`;
        valores += `<td>${j["Medios Disponibles"]}</td>`;
        valores += `<td>${j["Capacidad"]}</td>`;
        let id = j[encabezados[0]];
      
      valores += `<td><button class="btn btn-warning" type="button" onclick="cargarUno(${activo},${id})" data-bs-toggle="modal" data-bs-target="#modal${activo}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg></button></td>
      <td><button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalEliminar">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg>
      </button></td>`;
      dataTable += `
      <tr>${valores}</tr>
        `;
      })
      console.log(resultData[0])
    }
    else{
    data.forEach((i) => {
      //console.log("i",i);
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
      </svg></button></td>
      <td><button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalEliminar">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg>
      </button></td>`;
      dataTable += `
      <tr>${valores}</tr>
        `;
    });
  }
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
    tabHotel: "Hotel/getHotel",
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
    let txt_marcador = document.getElementById("txt_marcador_j1") + "-" +document.getElementById("txt_marcador_j2");
    let dt_fecha = document.getElementById("fecha_de_juego");
    let list_sala = document.getElementById("list_sala");
    let txt_entradas = document.getElementById("txt_entradas");
    let list_juez = document.getElementById("lst_jueces");
    let list_j1 = document.getElementById("listajugador");
    let list_j2 = document.getElementById("listajugador2");
    let txt_j1 = document.getElementById("txt_j1");
    let txt_j2 = document.getElementById("txt_j2");
    let chk_j1 = document.getElementById("chk_j1");
    let chk_j2 = document.getElementById("chk_j2");
    let txt_comentarios = document.getElementById("txt_comentarios");
    let txt_id_partido = document.getElementById("txt_id_partido");

    txt_id_partido.value = data["id"];
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
  else if(activo = "tabHotel")
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

async function cerrar_sesion()
{
  sessionStorage.clear();
  const request = await fetch(
    "http://localhost/tenisdemesa/Home/salir",
    {
      method: "GET",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
    }
  );
  if(request.ok)
  {
    window.location = "http://localhost/tenisdemesa";
  }
}

var groupBy = function (miarray, prop) {
  return miarray.reduce(function(groups, item) {
      var val = item[prop];
      groups[val] = groups[val] || {"Número Sala": item["Número Sala"], "Nombre Hotel": "", "Medios Disponibles": "","Capacidad": 0};
      groups[val]["Nombre Hotel"] = item["Nombre Hotel"];
      groups[val]["Medios Disponibles"] += item["Medios Disponibles"] + " ";
      groups[val]["Capacidad"] = item["Capacidad"];
      return groups;
  }, {});
}

async function crearRegistro(activo)
{
  switch(activo)
  {
    case 0:
    {
      let data = {
        fecha_de_juego: document.getElementById("dt_fecha_crear").value,
        id_sala: document.getElementById("list_sala_crear").value,
        num_entradas_vendidas: document.getElementById("txt_entradas").value ||0,
        numero_asociado_juez: document.getElementById("list_juez_crear").value.includes("-") ? document.getElementById("list_juez_crear").value.split(" - ")[0]:document.getElementById("list_juez_crear").value,
        numero_asociado_jugador1: document.getElementById("list_j1_crear").value.includes("-") ? document.getElementById("list_j1_crear").value.split(" - ")[0]:document.getElementById("list_j1_crear").value,
        numero_asociado_jugador2: document.getElementById("list_j2_crear").value.includes("-") ? document.getElementById("list_j2_crear").value.split(" - ")[0]:document.getElementById("list_j2_crear").value,
        numero_asociado_ganador: "",
        marcador: document.getElementById("txt_j1_crear").value + "-" + document.getElementById("txt_j2_crear").value || "0-0",
        comentarios: document.getElementById("txt_comentarios_crear").value
      }
      data.numero_asociado_ganador = document.getElementById("chk_j1_crear").checked ? data.numero_asociado_jugador1 : data.numero_asociado_jugador2;

      const request = await fetch(
        "http://localhost/tenisdemesa/Partido/insertarpartido",
        {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        }
      );
  
      const data2 = await request.json();
      //console.log(data2);
      
      if (request.ok) {
        $("#modaltabPartidosCrear").modal('hide');
      console.log(data2)
      }
      break;
    }
    case 1:
    {
      let data = {
        nombre: document.getElementById("txt_nombre_p_crear").value,
        direccion: document.getElementById("txt_direccion_p_crear").value,
        nivel_de_juego: document.getElementById("list_nivel_p_crear").value,
        correo: document.getElementById("txt_email_p_crear").value,
        clave: document.getElementById("txt_clave_p_crear").value,
        id_ciudad: document.getElementById("list_ciudad_p_crear").value.includes("-") ? document.getElementById("list_ciudad_p_crear").value.split(" - ")[0]:document.getElementById("list_ciudad_p_crear").value,
        id_rol: document.getElementById("list_rol_p_crear").value
      }
      const request = await fetch(
        "http://localhost/tenisdemesa/Organizador/insertarparticipante",
        {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        }
      );
      const data2 = await request.json();
      //console.log(data2);
      
      if (request.ok) {
        $("#modaltabParticipantesCrear").modal('hide')
      console.log(data2)
      }
      break;
    }
    case 2:
    {
      let data = {
        nombre: document.getElementById("txt_nombre_h_crear").value,
        direccion: document.getElementById("txt_direccion_h_crear").value
      }
      const request = await fetch(
        "http://localhost/tenisdemesa/Hotel/insertarhotel",
        {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        }
      );
      const data2 = await request.json();
      //console.log(data2);
      
      if (request.ok) {
        $("#modaltabHotelCrear").modal('hide')
      console.log(data2)
      }
      break;
    }
    case 3:
    {
      let data = {
        nombre: document.getElementById("nombre_ciudad"),
        num_clubes: document.getElementById("num_clubes")
      }
      const request = await fetch(
        "http://localhost/tenisdemesa/Ciudad/insertarciudad",
        {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        }
      );
      const data2 = await request.json();
      //console.log(data2);
      
      if (request.ok) {
        $("#modaltabCiudadCrear").modal('hide')
      console.log(data2)
      } 
      break;
    }
    case 4:
    {
      let data = {
        nombre: document.getElementById("nombre_campeonato"),
        id_ciudad: document.getElementById("listaciudad").value.includes("-") ? document.getElementById("listaciudad").value.split(" - ")[0]:document.getElementById("listaciudad").value,
        numero_asociado_ganador: document.getElementById("listajugador_c").value.includes("-") ? document.getElementById("listajugador_c").value.split(" - ")[0]:document.getElementById("listajugador_c").value,
      }
      const request = await fetch(
        "http://localhost/tenisdemesa/Ciudad/insertarciudad",
        {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        }
      );
      const data2 = await request.json();
      //console.log(data2);
      
      if (request.ok) {
        $("#modaltabHistoricoCrear").modal('hide')
      console.log(data2)
      } 
      break;
    }
  }
}

async function getSalas()
{
  const request = await fetch(
    "http://localhost/tenisdemesa/Sala/getSalas1",
    {
      method: "GET",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
    }
  );
  if(request.ok)
  {
    data = await request.json();
    lista = "";
    data.forEach((i)=>{
      lista += `<option value="${i["id_sala"]}">${i["id_sala"]}</option>`
    })
    document.getElementById("lst_sala_partido").innerHTML = `
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lst_sala_partido">
    ${lista}
    `;
    document.getElementById("list_sala_crear").innerHTML = `
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lst_sala_partido">
    ${lista}
    `;
    document.getElementById("list_hoteles_sala_crear").innerHTML = `
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lst_sala_partido">
    ${lista}
    `;
  }
}

async function getParticipante1()
{
  const request = await fetch(
    "http://localhost/tenisdemesa/Organizador/getParticipante1",
    {
      method: "GET",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
    }
  );
  if(request.ok)
  {   
      data = await request.json();
      lista = "";
      data.forEach((i)=>{
        lista += `<option value="${i["numero_asociado"] + " - " + i["nombre"]}">${i["numero_asociado"] + " - " + i["nombre"]}</option>`
      })
      document.getElementById("lst_jueces").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lst_jueces">
      ${lista}
      `;
      document.getElementById("list_juez_crear").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lst_jueces">
      ${lista}
      `;
    }
    
}

async function getJugador()
{
  const request = await fetch(
    "http://localhost/tenisdemesa/Organizador/getJugador",
    {
      method: "GET",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
    }
  );
  if(request.ok)
  {   
      data = await request.json();
      lista = "";
      data.forEach((i)=>{
        lista += `<option value="${i["numero_asociado"] + " - " + i["nombre"]}">${i["numero_asociado"] + " - " + i["nombre"]}</option>`
      })
      document.getElementById("listajugador").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listajugador">
      ${lista}`
      document.getElementById("listajugador_c").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listajugador">
      ${lista}`
      document.getElementById("listajugador2").innerHTML = 
      `<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listajugador2">
      ${lista}
      `;
      document.getElementById("list_j1_crear").innerHTML = 
      `<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listajugador2">
      ${lista}
      `;
      document.getElementById("list_j2_crear").innerHTML = 
      `<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listajugador2">
      ${lista}
      `;
      document.getElementById("list_ganador_c_crear").innerHTML = 
      `<select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listajugador2">
      ${lista}
      `;
    }
    
}

async function getCiudad()
{
  const request = await fetch(
    "http://localhost/tenisdemesa/Ciudad/getCiudad",
    {
      method: "GET",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
    }
  );
  if(request.ok)
  {   
      data = await request.json();
      lista = "";
      data.forEach((i)=>{
        lista += `<option value="${i["id_ciudad"] + " - " + i["nombre"]}">${i["id_ciudad"] + " - " + i["nombre"]}</option>`
      })
      document.getElementById("listaciudad").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listaciudad">
      ${lista}`
      ;
      document.getElementById("listaciudad_p").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listaciudad">
      ${lista}`
      ;
      document.getElementById("list_ciudad_p_crear").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listaciudad">
      ${lista}`
      ;
      document.getElementById("list_ganador_ciudad_crear").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listaciudad">
      ${lista}`
      ;
    }
    
}

async function getHotelito()
{
  const request = await fetch(
    "http://localhost/tenisdemesa/Hotel/getHotelito",
    {
      method: "GET",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
    }
  );
  if(request.ok)
  {   
      data = await request.json();
      lista = "";
      data.forEach((i)=>{
        lista += `<option value="${i["id_hotel"] + " - " + i["nombre"]}">${i["id_hotel"] + " - " + i["nombre"]}</option>`
      })
      /*document.getElementById("listahotel").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listahotel">
      ${lista}`
      ;*/
      document.getElementById("listahotel_s").innerHTML = `
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="listahotel">
      ${lista}`
      ;
    }
    
}