 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width,initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie-edge">
 	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 		<title>Proyecto</title>
 </head>
 <body class="grey lighten-2">
 	<main>
    <div class="row">
      <div class="input-field col s12 center">
      <img src="img/logo.png" alt="Logo" width="200">
     </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card z-depth-5">
            <div class="card-content">
              <span class="card-title">Inicio de sesion</span>
              <form action="login" method="post" autocomplete="off">
                <div class="input-field">
                  <i class="material-icons prefix">perm_identity</i>
                  <input type="text" name="usuario" id="usuario" required pattern="[A-Za-z]{6,15}" autofocus="">
                  <label for="usuario">Nombre de usuario</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">vpn_key</i>
                  <input type="password" name="pass" name="pass" required pattern="[A-Za-z0-9]{6,15]">
                  <label for="pass">Password</label>
                </div>
                <div class="input-field center">
                  <button type="submit" class="btn waves-effect waves-light">Ingresar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
 	
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="js/materialize.min.js"></script>
 </body>
 </html>
