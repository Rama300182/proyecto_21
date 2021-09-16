

<?php

try {

   $servidor_lakerbis = 'lakerbis';
   $conexion_locales = array( "Database"=>"LOCALES_LAKERS", "UID"=>"sa", "PWD"=>"Axoft", "CharacterSet" => "UTF-8");
   $cid_locales = sqlsrv_connect($servidor_lakerbis, $conexion_locales);
    
} catch (PDOException $e){
        echo $e->getMessage();
}

?>


<html>

<head>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Including Font Awesome CSS from CDN to show icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
	<!-- Datatable -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<!-- Style -->
  	<link rel="stylesheet" href="css/style.css">


<?php
	$año = date("Y");
	?>
        <div class="container pt-4" align="center">
			<div><img src="../ventas-canales/images/LOGO XL 2018.jpg" class="img-fluid" width="120px"></div>
			<div class="bg-white text-black"><h1><strong>Direccionario XL</strong></h1></div>
		</div>

		

</head>	
<body>


<div class="container">

  <table class="table-condensed table-hover table-bordered" id="mytable" data-page-length="100">
   <thead>
     <tr class="header">
      <th class="bg-primary" style="color: white; width:1%;" scope="col">Nº sucursal</th>
      <th class="bg-primary" style="color: white; width:2%;" scope="col">Código cliente</th>
      <th class="bg-primary" style="color: white; width:15%;" scope="col">Sucursal</th>
	  <th class="bg-primary" style="color: white; width:7%;" scope="col">Canal</th>
	  <th class="bg-primary" style="color: white; width:6%;" scope="col">Grupo empresario</th>
	  <th class="bg-primary" style="color: white; width:5%;" scope="col">Tipo local</th>
      <th class="bg-primary" style="color: white; width:20%;" scope="col">Dirección</th>
	  <th class="bg-primary" style="color: white; width:6%;" scope="col">Teléfono</th>
	  <th class="bg-primary" style="color: white; width:2%;" scope="col">Tienda</th>
	  <th style="width:1%"></th>
	  <th style="width:1%"></th>
    </tr>
  </thead>
	
  	<?php
	
	$sql = "SELECT * FROM DIRECCIONARIO";
	$result = sqlsrv_query($cid_locales, $sql);
	
	// print_r($result);
	
	while($row = sqlsrv_fetch_array($result)){
	?>
	
	<tr style="font-size:smaller">
		<td style="width:1%"><?=  $row['NRO_SUCURSAL']?></td>
		<td style="width:2%"><?=  $row['COD_CLIENT']?></td>
		<td style="width:15%"><?=  $row['DESC_SUCURSAL']?></td>
		<td style="width:7%"><?=  $row['CANAL']?></td>
		<td style="width:6%"><?=  $row['GRUPO_EMPRESARIO']?></td>
		<td style="width:3%"><?=  $row['TIPO_LOCAL']?></td>
		<td style="width:20%"><?=  $row['DIRECCION']?></td>
		<td style="width:6%"><?=  $row['TELEFONO']?></td>
		<td style="width:2%"><?=  $row['TIENDA']?></td>
		<td style="width:1%"><button id="myBtn" type="button" class="btn btn-success" data-toggle="modal" data-target="myModal"><span class="fa fa-info"></span></button></td>
		<td style="width:1%"><button class="btn btn-warning"><span class="fa fa-pencil"></span></button></td>
	</tr>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Datos sistemas</h4>
			</div>
			<div class="modal-body">
				<p><strong>Tango: </strong> <?=  $row['TANGO']?></p>
				<p><strong>Base: </strong> <?=  $row['BASE_NOMBRE']?></p>
				<p><strong>Conexión: </strong><textarea id="url" class="text"><?=  $row['CONEXION_DNS']?></textarea><i class="fa fa-copy"></i><span class="mensaje" id="mensaje"></span></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		
		</div>
	</div>


   <?php
   }  
   ?>


</table>

</div>

   	<!-- Modal -->	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Datatable -->	
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
	

<script>


const button = document.querySelector('i.fa-copy');
const input = document.querySelector('#url');
const mensaje = document.querySelector('#mensaje');

button.addEventListener('click', function(){
  input.focus();
  document.execCommand('SelectAll');
  document.execCommand('copy');
  
  //Deseleccionar el texto
  //window.getSelection().removeAllRanges(); 
  /*Al quitar el focus de la caja el texto
    en automatico se deselecciona asi que esto
    no es necesario
  */
  //Quitar el focus del input
  document.getElementById("url").blur();
  mensaje.innerHTML =" ¡Text copy!";
  mensaje.classList.add('fade-in');
  //mensaje.style.transition = "opacity 0.3s ease";
  //setTimeout(()=>mensaje.innerHTML="",1000):
  setTimeout(function(){
    mensaje.classList.remove('fade-in');
    mensaje.classList.add('fade-ou');
  },1000);
  
  
  
})


$(document).ready(function() {
    $('#mytable').DataTable();
} );

 $(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal('toggle');
  });
}); 


</script>

	
</body>
</html>

