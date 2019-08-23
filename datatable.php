<?php
if(isset($_POST['ACTIVAR'])){

require_once('./php/DB/dbOperation.php');
$resultado = $dbConn->selectEmployeeInfo();
$data = array();
while ($fila = $resultado->fetch()) {
    $data[] = $fila;
}
//var_dump($resultado);
//print_r($resultado);
$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData" => $data
);
echo json_encode($results);
}else{
    die();
}

?>