<?php

class Venta
{

    public function traerVentas($rubro, $destino, $temporada, $desde, $hasta, $categoria)
    {
        $rows = array();
        try {
            $servidor_lakerbis = '192.168.0.143,1433';
            $conexion_locales = array("Database" => "POWER_BI_CONTROL", "UID" => "sa", "PWD" => "Axoft1988", "CharacterSet" => "UTF-8");
            $cid_central = sqlsrv_connect($servidor_lakerbis, $conexion_locales);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        if($rubro != '%'){
        for ($i = 0; $i < count($rubro); $i++) {
            $sql = "
        SELECT FECHA_VENTA, DESC_SUCURSAL, ARTICULO, DESCRIPCION, CANT_VEND, RUBRO, CATEGORIA, TEMPORADA, DESTINO, PRECIO, CANAL 
        FROM RO_VENTAS_COMERCIAL WHERE FECHA_VENTA BETWEEN '$desde' AND '$hasta' AND RUBRO LIKE '%$rubro[$i]' AND DESTINO LIKE '%$destino' 
        AND TEMPORADA LIKE '%$temporada' AND CATEGORIA LIKE '%$categoria'
        ";
           
        }
    }else
        {
            $sql = "
            SELECT FECHA_VENTA, DESC_SUCURSAL, ARTICULO, DESCRIPCION, CANT_VEND, RUBRO, CATEGORIA, TEMPORADA, DESTINO, PRECIO, CANAL 
            FROM RO_VENTAS_COMERCIAL WHERE FECHA_VENTA BETWEEN '$desde' AND '$hasta' AND RUBRO LIKE '%' AND DESTINO LIKE '%$destino' 
            AND TEMPORADA LIKE '%$temporada' AND CATEGORIA LIKE '%$categoria'
            ";
        }
        $stmt = sqlsrv_query($cid_central, $sql);

           

        while ($v = sqlsrv_fetch_array($stmt)) {
            $rows[] = $v;
        }
        return $rows;
    }
}
