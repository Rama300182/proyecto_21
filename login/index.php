<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <title>Login XL Gestión</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link href="images/LOGO XL 2018.jpg">

</head>
<body>

<form class="login-form validate-form" id="formLogin" action="" method="post">
    <div class="row" align="center">
        <div class="col">
          <div class="content" style="width:500px">
            <h3>Login XL Gestion</h3>
            <figure>
              <img src="images/LOGO XL 2018.jpg" alt="" />
            </figure>
            <div class="inp">
              <input id="usuario" type="text" class="email col-6" placeholder="login" />
              <br>
              <input id="password" type="password" class="pass col-6" placeholder="password" />
              <br>
              <button type="submit" class="btn btn-primary">Log in</button>
            </div>
            <div class="min-footer">
              <span>Olvidaste la contraseña?</span>
            </div>
          </div>
          <br />
          <br />
          <br />
        </div>
      </div>
 </form>

    

<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="codigo.js"></script>

</body>
</html>