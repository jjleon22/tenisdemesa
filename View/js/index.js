document.addEventListener("DOMContentLoaded", function (event) {
  crearCuadrangulares();
});

async function crearCuadrangulares() {
  try {
    const request = await fetch(
      `http://localhost/tenisdemesa/Partido/getPartidos`,
      {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }
    );
    const data = await request.json();
    console.log("🚀 ~ file: index.js:19 ~ data", data);
    let ganadores = new Array()
    data.forEach((element) => {
      //console.log("🚀 ~ file: index.js:21 ~ ganadores ~ element", element["Jugador 1"].includes(element["numero_asociado_ganador"]))
      if (element["Jugador 1"].includes(element["numero_asociado_ganador"])) {
          console.log("🚀 ~ file: index.js:26 ~ ganadores ~", element["Jugador 1"])
        ganadores.push(element["Jugador 1"]);
      } else {
        ganadores.push(element["Jugador 2"]);
      }
    });
    
    console.log("🚀 ~ file: index.js:23 ~ ganadores ~ ganadores", ganadores);
    
  } catch (error) {
    console.log(error);
  }
}
