async function logeo(e) {
  const email = document.getElementById("correo").value;
  console.log("🚀 ~ file: login.js:3 ~ logeo ~ email", email)
  const password = document.getElementById("clave").value;
  console.log("🚀 ~ file: login.js:5 ~ logeo ~ password", password)
  if (email.value == "") {
    //TODO: Agregar css para indicar que el usuario es obligatorio
  } else if (password.value == "") {
    //TODO: Agregar css para indicar que la contraseña es obligatoria
  } else {
    const request = await fetch(
      "http://localhost/tenisdemesa/Organizador/verificar",
      {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          "correo":email,
          "clave":password
       }),
      }
    );

    const data = await request.json();
    console.log(data);
    
    if (request.ok && request.status == 200) {
      //const res = await request.json();
      console.log(data);
      if (data == 1) {
        window.location = base_url + "administrador";
      } else if (data == 2) {
        window.location = base_url + "jugador";
      } else if (data == 3) {
        window.location = base_url + "juez";
      } else if (data == 4) {
        window.location = "http://localhost/tenisdemesa/Organizador";
      }
    }
     };
  }
