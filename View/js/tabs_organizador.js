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



async function cargarTabla(activo) {

  const elegirTabla = {"tabPartidos": "Partidos",
  "tabParticipantes":"Participantes",
  "tabSalas":"Salas",
  "tabCiudad":"Ciudades",
  "tabHistorico":"Campeonatos"
};

  const request = await fetch('http://localhost/tenisdemesa/Partido/getPartidos', {
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
    data.forEach(i => {
      console.log("i",i);
      let contHead = 0;
      let valores = "";
      
      encabezados.forEach((j)=>{
        //console.log("j",j)
        valores += `<td>${i[encabezados[contHead++]]}</td>`;
      })
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
  /*
    let url = "http://localhost/tenisdemesa/Partido/getPartidos";
    let http = new XMLHttpRequest;
    http.open("GET",url,true);
    http.send();
    http.onreadystatechange = () => {
      if(this.readyState == 4 && this.status == 200)
      {
        let res = JSON.parse(responseText);
        console.log("🚀 ~ file: tabs_organizador.js:33 ~ cargarTabla ~ res", res)
      }
    };
    

    let columns = [`
        <th scope="col">#</th>
        <th scope="col">Fecha</th>
        <th scope="col">Juez</th>
        <th scope="col">Jugador 1 </th>
        <th scope="col">Jugador 2</th>
        <th scope="col">Marcador</th>
        <th scope="col">Comentarios</th>
        <th scope="col">Sala</th>
        <th scope="col">Entradas Vendidas</th>`, 
        `<th scope="col"># Asociado</th>
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
              <td>Mark&nbsp;&nbsp;<img src="http://localhost/tenisdemesa/View/resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Jacob&nbsp;&nbsp;<img src="http://localhost/tenisdemesa/View/resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob&nbsp;&nbsp;<img src="http://localhost/tenisdemesa/View/resources/trophy-fill.svg" alt="Ganador"></td>
              <td>Thornton</td>
            </tr>
           </tbody>
        </table>`;
        */
}

