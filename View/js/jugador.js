document.addEventListener("DOMContentLoaded", function (event) {
  document.getElementById(
    "txt_nombre"
  ).innerHTML = `Hola ${sessionStorage["nombre"]}`;
  participante();
  hospedajes();
});

async function participante() {
  const request = await fetch(
    `http://localhost/tenisdemesa/Partido/getPartidoJ`,
    {
      method: "POST",
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ id: sessionStorage.id }),
    }
  );
  if (request.ok) {
    let partidos = "<tr>";
    const data = await request.json();
    console.log(data);
    data.forEach((i) => {
      partidos += `<td>${i["ID Partido"]}</td>`;
      partidos += `<td>${i["Fecha"]}</td>`;
      partidos += `<td>${i["Juez"]}</td>`;
      partidos += `<td>${i["Jugador 1"]}</td>`;
      partidos += `<td>${i["Jugador 2"]}</td>`;
      partidos += `<td>${i["Marcador"]}</td>`;
      partidos += `<td>${i["Comentarios"]}</td>`;
      partidos += `<td>${i["Sala"]}</td>`;
      partidos += "</tr><tr>";
    });
    //console.log(partidos)
    let tablaJuez = `<table class="table" id="tbJuez">
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
    ${partidos}
  </tbody>
</table>`;
    document.getElementById("tbJugador").innerHTML = tablaJuez;
  }
}

async function hospedajes() {
    const request = await fetch(
      `http://localhost/tenisdemesa/Participante/getHospedajes`,
      {
        method: "POST",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ id: sessionStorage.id }),
      }
    );
    if (request.ok) {
      let partidos = "<tr>";
      const data = await request.json();
      console.log(data);
      data.forEach((i) => {
        partidos += `<td>${i["nombre"]}</td>`;
        partidos += `<td>${i["fecha_inicio"]}</td>`;
        partidos += `<td>${i["fecha_fin"]}</td>`;
        partidos += "</tr><tr>";
      });
      //console.log(partidos)
      let tablaJuez = `<table class="table" id="tbJuez">
    <thead>
    <tr>
              <th scope="col">Hotel Elegido</th>
              <th scope="col">Fecha Entrada</th>
              <th scope="col">Fecha Salida</th>
            </tr>
    </thead>
    <tbody class="table-group-divider">
      ${partidos}
    </tbody>
  </table>`;
      document.getElementById("tbHospedaje").innerHTML = tablaJuez;
    }
  }

async function cerrar_sesion() {
  sessionStorage.clear();
  const request = await fetch("http://localhost/tenisdemesa/Home/salir", {
    method: "GET",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
  });
  if (request.ok) {
    window.location = "http://localhost/tenisdemesa";
  }
}
