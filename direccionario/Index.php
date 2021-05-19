

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<?php
	$año = date("Y");
	?>
<br/><br/>
        <div class="container" align="center">
			<img src="../ventas-canales/images/LOGO XL 2018.jpg" class="img-fluid" width="120px">
			<div class="bg-success text-white"><h1>Direccionario XL</h1></div>
		</div>

		

</head>	
<body>



<div class="container">


  <table class="table-condensed table-hover table-bordered" id="mytable" data-page-length="100">
   <thead>
     <tr class="header">
      <th class="bg-primary" style="color: white; width:2%;" scope="col">Nº sucursal</th>
      <th class="bg-primary" style="color: white; width:3%;" scope="col">Código cliente</th>
      <th class="bg-primary" style="color: white; width:10%;" scope="col">Sucursal</th>
	  <th class="bg-primary" style="color: white; width:8%;" scope="col">Grupo empresario</th>
      <th class="bg-primary" style="color: white; width:10%;" scope="col">Dirección</th>
	  <th class="bg-primary" style="color: white; width:6%;" scope="col">Teléfono</th>
    </tr>
  </thead>
	
	<?php
	
	$sql = "SELECT * FROM DIRECCIONARIO";
	$result = sqlsrv_query($cid_locales, $sql);
	
	// print_r($result);
	
	while($row = sqlsrv_fetch_array($result)){
	?>
	
	<tr style="font-size:smaller">
		<td style="width:2%"><?=  $row['NRO_SUCURSAL']?></td>
		<td style="width:3%"><?=  $row['COD_CLIENT']?></td>
		<td style="width:10%"><?=  $row['DESC_SUCURSAL']?></td>
		<td style="width:8%"><?=  $row['GRUPO_EMPRESARIO']?></td>
		<td style="width:10%"><?=  $row['DIRECCION']?></td>
		<td style="width:6%"><?=  $row['TELEFONO']?></td>
	</tr>
   <?php
   }  
   ?>


</table>

<script src="js/sweetAlert.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script src= >"https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"</script>
<script src= >"https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"</script>
<script src= >"https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

<script>

$(document).ready(function() {
    $('#mytable').DataTable();
} );


</script>

</body>
</html>

