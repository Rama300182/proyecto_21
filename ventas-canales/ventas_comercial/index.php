<?php

require 'class/rubro.php';
require 'class/venta.php';
require 'class/destino.php';
require 'class/temporadas.php';
require 'class/categoria.php';

$rubro = new Rubro();
$todosLosRubros = $rubro->traerRubros();

$destino = new Destino();
$todosLosDestinos = $destino->traerDestinos();

$temporada = new Temporada();
$todasLasTemporadas = $temporada->traerTemporadas();

$categoria = new Categoria();
$todasLasCategorias = $categoria->traerCategorias();

$venta = new Venta();
$desde = isset($_GET['desde']) ? $_GET['desde'] : date("Y-m-d");
$hasta = isset($_GET['hasta']) ? $_GET['hasta'] : date("Y-m-d");

?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" >
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <link rel="icon" type="image/png" href="images/logo_xl48x48.png">
  <!-- Including Font Awesome CSS from CDN to show icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <title>Ventas</title>

</head>

<body>
  <div class="container-xl">
    <div class="text-left p-3 bg-primary text-white">
      <h5>
        <i class="fa fa-cart-arrow-down"></i> Ventas por canales
        <h5>
    </div>
    <div class="text-secondary"> Inluye las ventas de sucursales propias, ventas de franquicias, venta a franquicias (Sucursal=Franquicias) y venta a mayoristas (Sucursal=Mayoristas) </div>

    </br>


    <?php

    $hoy = date("Y-m-d");
    //echo var_dump($hoy) . "<br>";
    //print ($hoy);
    //die();

    ?>


    <form>

      <div class="form-row">
        <div class="col-sm-2 mt-auto">
          <label class="col-sm col-form-label">Desde:</label>
          <input type="date" class="form-control form-control-sm" name="desde" value="<?= $desde ?>">
        </div>

        <div class="col-sm-2 mt-auto">
          <label class="col-sm col-form-label">Hasta:</label>
          <input type="date" class="form-control form-control-sm" name="hasta" value="<?= $hasta ?>">
        </div>

        <div class="col-sm-2 mt-2 ">
          <label for="inputCity">Rubro</label>
          <select id="inputState" class="form-control form-control-sm multi_select " multiple data-selected-text-format="count" name="rubro[]"  title="Elija las opciones">
            <?php
            foreach ($todosLosRubros as $rubro => $key) {
            ?>
              <option value="<?= $key['DESCRIP'] ?>"><?= $key['DESCRIP'] ?></option>
            <?php
            }

            ?>
        </div>
          



        </select>
      </div>
      <div class="col-sm-2 mt-2">
        <label for="inputState2">Categoria</label>
        <select id="inputState2" class="form-control form-control-sm" name="categoria">
          <option selected></option>
          <?php
          foreach ($todasLasCategorias as $categoria => $key) {
          ?>
            <option value="<?= $key['CATEGORIA'] ?>"><?= $key['CATEGORIA'] ?></option>
          <?php
          }
          ?>
      </div>

      </select>
    </div>
    <div class="col-sm-2l mt-2">
    <label for="inputState3">Destino</label>
    <select id="inputState3" class="form-control form-control-sm" name="destino">
      <option selected></option>
      <?php
      foreach ($todosLosDestinos as $destino => $key) {
      ?>
        <option value="<?= $key['DESTINO'] ?>"><?= $key['DESTINO'] ?></option>
      <?php
      }
      ?>
    </div>

  </select>
  </div>
  <div class="col-sm-2l mt-2">
    <label for="inputZip">Temporada</label>
    <select id="inputState4" class="form-control form-control-sm" name="temporada">
      <option selected></option>
      <?php
      foreach ($todasLasTemporadas as $temporada => $key) {
      ?>
        <option value="<?= $key['TEMPORADA'] ?>"><?= $key['TEMPORADA'] ?></option>
      <?php


      }
      ?>
    </select>
  </div>

    <div class="form-row mt-auto">
      <button type="submit" name="submit" class="btn btn-primary mt-3 float-left" onclick="window.re" id="search">Buscar <span class="fa fa-search"></span></button>
      <button id="btnExport" class="btn btn-success mt-3 ml-2" onclick="exportReportToExcel(this)">Exportar <i class="fa fa-file-excel-o"></i></button>
    </div>

  </div>


  </form>





  <?php



if (isset($_GET['submit'])){
  /* var_dump($_GET['rubro']); */
  if (isset($_GET['rubro'])){
    $rubro = $_GET['rubro'];}
  else {
    $rubro = '%';
  }   

    if ($_GET['destino'] != '') {
      $destino = $_GET['destino'];
    } else {
      $destino = '%';
    }

    if ($_GET['temporada'] != '') {
      $temporada = $_GET['temporada'];
    } else {
      $temporada = '%';
    }

    if ($_GET['categoria'] != '') {
      $categoria = $_GET['categoria'];
    } else {
      $categoria = '%';
    }

    $todasLasVentas = $venta->traerVentas($rubro, $destino, $temporada, $desde, $hasta, $categoria);

  

  ?>

    <br><br>
    <table class="table table-striped mt-0" id="mytable" data-page-length="100">

      <thead>
        <tr>
          <th style="width:20%;">Canal</th>
          <th style="width:30%;">Sucursal</th>
          <th style="width:5%;">Artículo</th>
          <th style="width:30%;padding:0px 30px 10 30px;">Descripcion</th>
          <th style="width:6%;">Cantidad</th>
          <th style="width:25%;padding:0px 33px 10 33px;">Rubro</th>
          <th style="width:20%;padding:0px 33px 10 33px;">Categoria</th>
          <th style="width:6%;">Temporada</th>
          <th style="width:20%;">Destino</th>
          <th style="width:6%;">Precio</th>
        </tr>
      </thead>

      <tbody>


        <?php

        $sum = 0;

        foreach ($todasLasVentas as $venta => $key) {
        ?>

          <?php

          $sum += $key['CANT_VEND'];

          ?>

          <tr>
            <td style="width:20%" onClick="sweet(this)"><?= $key['CANAL'] ?></td>
            <td style="width:30%" onClick="sweet(this)"><?= $key['DESC_SUCURSAL'] ?></td>
            <td style="width:5%" onClick="sweet(this)"><?= $key['ARTICULO'] ?></td>
            <td style="width:30%" onClick="sweet(this)"><?= $key['DESCRIPCION'] ?></td>
            <td style="width:6%" onClick="sweet(this)"><?= $key['CANT_VEND'] ?></td>
            <td style="width:25%" onClick="sweet(this)"><?= $key['RUBRO'] ?></td>
            <td style="width:20%" onClick="sweet(this)"><?= $key['CATEGORIA'] ?></td>
            <td style="width:6%" onClick="sweet(this)"><?= $key['TEMPORADA'] ?></td>
            <td style="width:15%" onClick="sweet(this)"><?= $key['DESTINO'] ?></td>
            <td style="width:6%" onClick="sweet(this)"><?= "$" . number_format($key['PRECIO'], 0, ",", ".") ?></td>
          </tr>

        <?php
        }
        ?>
      </tbody>

      <tr>
        <td align="center">
          <h2>TOTAL</h2>
        </td>
        <td>
          <h2> <a id="cantidad"> <?= number_format($sum, 0, '', '.') ?> </a> </h2>
        </td>
      </tr>


    </table>

  <?php
}
  ?>



  <!--habilita multiselect-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
 <!--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
  <!--Exportar a excel-->
  <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
  
  

  <script>

document.getElementById('inputState').addEventListener('change',sumar_rubro);

var rubro=[];
function sumar_rubro()
{
  console.log('entraste');
  let a = document.getElementsByClassName('selected');
  for(let i=0;i<a.length;i++)
  {
    rubro[i]=a[i].innerText;
    console.log(rubro[i]);
  }

  
}

    $(document).ready(function() {
      $('.multi_select').selectpicker();
    });

    //$(document).ready(function() {
    //    $('#mytable').DataTable();
    //} );

    

  
/* 
    $(document).ready(function() {
      $('#mytable').DataTable({
        dom: 'Bfrtip',
        buttons: [

          {
            extend: 'copy',
            footer: true,
            title: 'Venta locales',
            filename: 'Ventas',
            text: '<button class="btn btn-secondary ">Copiar <i class="fa fa-copy"></i></button>'
          },

          {
            //Botón para Excel
            extend: 'csv',
            footer: true,
            title: 'Venta locales',
            filename: 'Ventas',
            text: '<button class="btn btn-success ">CSV <i class="fa fa-file-excel-o"></i></button>'
          },

          {
            //Botón para Excel
            extend: 'excel',
            footer: true,
            title: 'Venta locales',
            filename: 'Ventas',
            text: '<button class="btn btn-success ">Excel <i class="fa fa-file-excel-o"></i></button>'
          }

          ,

          {
            extend: 'pdf',
            footer: true,
            title: 'Venta locales',
            filename: 'Ventas',
            text: '<button class="btn btn-danger ">PDF <i class="fa fa-file-pdf-o"></i></button>'
          }

          ,

          {
            extend: 'print',
            footer: true,
            title: 'Venta locales',
            filename: 'Ventas',
            text: '<button class="btn btn-info ">Imprimir <i class="fa fa-print"></i></button>'
          }


        ]
      });
    }); */

    function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
}

/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[3] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#mytable').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );
  </script>



</body>

</html>