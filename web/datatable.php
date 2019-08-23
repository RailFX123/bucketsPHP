<?php
if(isset($_POST['ACTIVAR'])&&!empty($_POST['ACTIVAR'])){
    require_once('./php/DB/dbOperation.php');
    try {
        $resultado = $dbConn->selectEmployeeInfo();
        $data = array();
        if ($resultado) {
            while ($fila = $resultado->fetch()) {
                $data[] = $fila;
            }
            $results = array(
                "sEcho" => 1,
                "iTotalRecords" => count($data),
                "iTotalDisplayRecords" => count($data),
                "aaData" => $data
            );
            echo json_encode($results);
        } else {
            echo 'Error en consulta.';
        }
    } catch (Exception $var) {
        die();
    }
} else {
    die();
}
?>