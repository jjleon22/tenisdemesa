function logeo(e) {
    const email = document.getElementById("correo");
    const password = document.getElementById("clave");
    if (email.value == "") {
      //TODO: Agregar css para indicar que el usuario es obligatorio
    } else if (password.value == "") {
      //TODO: Agregar css para indicar que la contraseña es obligatoria
    } else {
      const url = "http://localhost/tenisdemesa/Controller/Organizador/verificar";
      const frm = document.getElementById("frmlogeo");
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(new FormData(frm));
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
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
        } else {
  
            alert("Error en el logeo");
              }
          }
        }
      }
    
  