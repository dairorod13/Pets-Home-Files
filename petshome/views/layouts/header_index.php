<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="assets/css/Style.css">
      <title>Inicio</title>
      <link rel="icon" type="image/png" href="assets/img/Pets_Home2.png">
    </head>
    <body>

      <section class="Logo" id="carga">
        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
              <img class="responsive-img" src="assets/img/Pets_Home3.png" alt="">
              <div class="progress">
              <div class="indeterminate"></div>
              </div>
            </div>
            <div class="col s4"></div>
        </div>
      </section>

            <ul class="sidenav" id="mobile-demo">
              <div class="container">

                  <div class="row">
                    <div class="col s2"></div>
                    <div class="col s8">
                      <img class="responsive-img" src="assets/img/Pets_Home2.png" alt="">
                    </div>
                    <div class="col s2"></div>
                  </div>

              </div>
              <li><a href="?controller=index">Inicio</a></li>
              <li><a href="#">Comunidad</a></li>
              <li><a href="?controller=index&method=create">Registrar</a></li>
              <li><a href="?controller=index&method=signin">Ingresar</a></li>
            </ul>


<div class="hide" id="contenido">
  <nav>
    <div class="nav-wrapper blue darken-3">
      <div class="container">
      <a href="#" class="brand-logo">Pets Home</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>


      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?controller=index">Inicio</a></li>
        <li><a href="#">Comunidad</a></li>
        <li><a href="?controller=index&method=create">Registrar</a></li>
        <li><a href="?controller=index&method=signin">Ingreso</a></li>
      </ul>
    </div>
    </div>
  </nav>
