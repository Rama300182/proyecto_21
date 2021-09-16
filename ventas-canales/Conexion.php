
<?php

try {

   $servidor_lakerbis = 'lakerbis';
$conexion_locales = array( "Database"=>"POWER_BI_CONTROL", "UID"=>"sa", "PWD"=>"Axoft1988", "CharacterSet" => "UTF-8");
$cid_locales = sqlsrv_connect($servidor_lakerbis, $conexion_locales);
    
} catch (PDOException $e){
        echo $e->getMessage();
}

?>


