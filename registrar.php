<?php
require_once('./php/Model/class.php');
require_once('./php/Functions/cloud.php');
require_once('./php/DB/dbOperation.php');
if (isset($_POST['user']) && isset($_FILES['user'])) {
    $test = new User($_POST['user'], $_FILES['user']);
    $variable=md5($test->getCorreo().$test->getCvfile()['path'])  . '.pdf';
    $count = $dbConn->insertInfo($test->getNombre(), $test->getApellido(), $test->getTelefono(), $test->getCorreo(), $variable);
    $count=2;
    if ($count > 0) {
        $cloud->upload_object('phpstorage', $variable,$test->getCvfile()['path']);
        header("Location: empleados.php");
        die();
    } else {
         header("Location: empleados.php");
         die();
    }
} else {
    header("Location: index.php");
    die();
}
?>