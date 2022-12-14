<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ping Pow Bogota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ping Pow Bogota</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Sigue el torneo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <!--if si es rol 3-->
            <li class="nav-item">
              <a class="nav-link" href="#">Gestion</a>
            </li>
          </ul>
          <!--se debe elegir uno u otro segun si ya inicio sesion-->
          <li style="list-style: none;">Hola Juan</li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin"
            aria-controls="offcanvasLogin">
            Login
          </button>
        </div>
      </div>
    </nav>
    <!--fin navbar-->

    <!--login-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin" aria-labelledby="offcanvasLoginLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLoginLabel">
          Login
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
          </div>
          <button type="submit" class="btn btn-primary">
            <a href="<?php echo BASE_URL;?>Organizador" style="text-decoration: none; color:white">Submit</a>
          </button>
          <br><br>
          <p class="fw-lighter">Login to see your tournament data</p>
        </form>
      </div>
    </div> <!--fin login-->

    <!--contenido main-->
    <div class="container text-center mt-3">
      <div class="row">
        <div class="col">
          <h1>
            Torneo Ping Pow Bogota 2022
          </h1>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col">
          <span class="mt-5 fw-lighter">
            Sigue a los mejores 16 de todo el pais
          </span>
        </div>
      </div>
      <!--brackets-->
      <div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span>3</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span>3</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span>4</span></div>
        <div class="col"><span>Trofeo</span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span>4</span></div>
        <div class="col"><span>Ganador</span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span>3</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span>3</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span></span></div>
        <div class="col"><span>2</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
      <div class="row">
        <div class="col"><span>1</span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
        <div class="col"><span></span></div>
      </div>
    </div> <!--fin brackets-->
    </div> <!--fin contenido-->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>