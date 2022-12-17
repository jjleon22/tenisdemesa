async function logeo(e) {
  const email = document.getElementById("correo");
  const password = document.getElementById("clave");
  if (email.value == "") {
    //TODO: Agregar css para indicar que el usuario es obligatorio
  } else if (password.value == "") {
    //TODO: Agregar css para indicar que la contraseña es obligatoria
  } else {
    const request = await fetch(
      "http://localhost/tenisdemesa/Organizador/verificar",
      {
        method: "POST",
        headers: {
          "Accept": "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify({ correo: email, clave: password }),
      }
    ).then((response)=>{(console.log(response))});
  
    if (request.ok && request.status == 200) {
      const res = await request.json();
      console.log(res);
      if (res == "1") {
        window.location = base_url + "administrador";
      } else if (res == "2") {
        window.location = base_url + "jugador";
      } else if (res == "3") {
        window.location = base_url + "juez";
      } else if (res == "4") {
        window.location = "http://localhost/tenisdemesa/View/Organizador.php";
      }
    }
     };
  }
