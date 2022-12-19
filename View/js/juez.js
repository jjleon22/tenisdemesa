document.addEventListener("DOMContentLoaded", function (event) {
    document.getElementById("txt_nombre").innerHTML = `Hola ${sessionStorage["nombre"]}`
    participante();
  });
  

async function participante()
{

  const request = await fetch(
    `http://localhost/tenisdemesa/Partido/getPartidoP`,
    {
      method: "POST",
      headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },body: JSON.stringify({"id":sessionStorage.id}),
    }
    );
    if(request.ok)
    {
        let partidos = "<tr>";
        const data = await request.json();
        console.log(data);
    data.forEach(i => {
    partidos += `<td>${i["ID Partido"]}</td>`
    partidos += `<td>${i["Fecha"]}</td>`
    partidos += `<td>${i["Juez"]}</td>`
    partidos += `<td>${i["Jugador 1"]}</td>`
    partidos += `<td>${i["Jugador 2"]}</td>`
    partidos += `<td>${i["Marcador"]}  &nbsp;&nbsp;<button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalMarcador">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg></button></td>`
    partidos += `<td>${i["Comentarios"]}</td>`
    partidos += `<td>${i["Sala"]}</td>`
    partidos += "</tr><tr>"
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
document.getElementById("tbJuez").innerHTML = tablaJuez;

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