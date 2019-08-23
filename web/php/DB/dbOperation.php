<?php
require_once('./php/DB/dbSettings.php');          // Define db configuration arrays here
require_once('./php/DB/dbCon.php');             // Include this file

class DbOperations
{
    private $dataCon;
    public function __construct($dbConnection)
    {
        $this->dataCon = new DBConnection($dbConnection);
    }
    public function __destruct()
    { }

    public function  insertInfo($nombre, $apellido, $telefono, $correo, $filepath)
    {    
        $sqlInsert = "INSERT INTO `empleo_cv`.`empleados` (`nombre`, `apellido`, `telefono`, `correo`, `curriculum`) VALUES ('".$nombre."', '".$apellido."', '".$telefono."', '".$correo."', 'https://storage.cloud.google.com/phpstorage/".$filepath."?authuser=1');";              // Insert/Update/Delete Statements:
        $count = $this->dataCon->runQuery($sqlInsert);     // Use this method to run inserts/updates/deletes
        return $count;
    }
    public function selectEmployeeInfo(){
        $sqlSelect = "SELECT UPPER(NOMBRE) as nombre,UPPER(APELLIDO) as apellido,TELEFONO,UPPER(CORREO) as correo,CURRICULUM as curriculum FROM empleo_cv.empleados";           // Select Statements:
        $rows = $this->dataCon->getQuery($sqlSelect);
        return $rows;
    }
}
$dbConn= new DbOperations($localhost);
?>