<!DOCTYPE html>
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your iconos ---------->

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Menu</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive bg-white"  src="images/user1.png" width="0,5" height="0,2" alt="Foto User">
        </div>
        <div class="user-info">
          <span class="user-name">User
            <strong>Name</strong>
          </span>
          <span class="user-role">Administrador</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboards</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
              <li>
                  <a href="https://app.powerbi.com/view?r=eyJrIjoiYjYwYzA2NjktOGI1MC00MzRjLTlkZjMtYzgxMDQzMGE3ZTIzIiwidCI6IjQ0Y2E2MmNkLTY4MjItNDZkNC05NTUxLTEzNDQ5N2ZmM2VjMiIsImMiOjR9" target="_blank">
                    <span>Sales Gcia.</span>
                    <span class="badge badge-pill badge-success mt-1">Disp</span>
                  </a>
                </li>
                <li>
                  <a href="https://app.powerbi.com/view?r=eyJrIjoiYjRiYzQ0NTAtODA5NS00YTZmLWEwMGMtNjNmZTM1ZDhmNDRkIiwidCI6IjQ0Y2E2MmNkLTY4MjItNDZkNC05NTUxLTEzNDQ5N2ZmM2VjMiIsImMiOjR9" target="_blank">
                    <span>Sales Sucursales</span>
                    <span class="badge badge-pill badge-success mt-1">Disp</span>
                 </a>
                </li>
                <li>
                  <a href="https://app.powerbi.com/view?r=eyJrIjoiMDYxOTc1MzItMTYyZS00ODhkLTk3NjktOGMwMmQ1NjNhM2Y1IiwidCI6IjQ0Y2E2MmNkLTY4MjItNDZkNC05NTUxLTEzNDQ5N2ZmM2VjMiIsImMiOjR9" target="_blank">
                    <span>Sales Franquicias</span>
                    <span class="badge badge-pill badge-success mt-1">Disp</span>
                </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Ecommerce</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="http://192.168.0.143:8080/ecommerce/index.php" target="_blank">
                  <span>Pedidos</span>
                  </a>
                </li>

                <li>
                  <a href="http://app.xl.com.ar:8080/ecommerce-auditoria/" target="_blank">
                  <span>Auditoría ecommerce</span>
                  </a>
                </li>

                <li>
                  <a href="http://app.xl.com.ar:8080/ecommerce/auditoriaPrisma/" target="_blank">
                  <span>Auditoría prisma</span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa fa-truck"></i>
              <span>Logistica</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#"></a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Ventas</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="ventas-canales/ventas_comercial/index.php" target="_blank">
                  <i class="fa fa-shopping-bag"></i>
                    <span>Sucursales</span>
                    <span class="badge badge-pill badge-success mt-2">Disp</span>
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class="fa fa-shopping-bag"></i>
                    <span></span>
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class="fa fa-shopping-bag"></i>
                    <span></span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Utiles</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="direccionario/index.php" target="_blank">
                  <i class="fa fa-shopping-bag"></i>
                    <span>Direccionario</span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Catalogo</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Social</span>
          </li>
          <li>
          <li>
            <a href="https://www.instagram.com/xlextralarge/" target="_blank">
              <i class="fab fa-instagram"></i>
              <span>Instagram</span>
            </a>
          </li>
         <li>
            <a href="https://www.facebook.com/xlextralarge" target="_blank">
              <i class="fab fa-facebook"></i>
              <span>Facebook</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="http://192.168.0.143:8080/testing/login.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <H2>
        XL GESTION 
      </H2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>Sistema de gestión de XL</p>
          <p> Acceda a <a href="https://www.xlshop.com.ar/" target="_blank">
              xlshop.com.ar</a> y vea los productos</p>
        </div>
      </div>

      <h5>Más Dashboards</h5>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="images/dash promociones.jpg" class="card-img-top rounded-0">
            <div class="card-body text-center">
              <h6 class="card-title">Dashboard Promociones</h6>
              <a href="https://app.powerbi.com/view?r=eyJrIjoiYTg5MGFmZmEtZGI3YS00ODcwLWIzMzctNWZiYzg2ZTQ4ZGQ1IiwidCI6IjQ0Y2E2MmNkLTY4MjItNDZkNC05NTUxLTEzNDQ5N2ZmM2VjMiIsImMiOjR9" target="_blank" class="btn btn-primary btn-sm">Acceder</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="images/dash ecommerce.jpg" class="card-img-top rounded-0">
            <div class="card-body text-center">
              <h6 class="card-title">Dashboard Ecommerce</h6>
              <a href="https://app.powerbi.com/view?r=eyJrIjoiZTA5MTc4ZjgtMWY4YS00NGEwLWE3ZDktYTU5Nzg3Y2E0ZDkzIiwidCI6IjQ0Y2E2MmNkLTY4MjItNDZkNC05NTUxLTEzNDQ5N2ZmM2VjMiIsImMiOjR9" target="_blank" class="btn btn-primary btn-sm">Acceder</a>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <footer class="text-center">
        <div class="pt-5">
          <small>
            © 2021
            </a>
          </small>
        </div>
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
   
</body>

<script>

jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});

</script>

</html>