<?php
require_once('./php/DB/dbSettings.php');          // Define db configuration arrays here
require_once('./php/DB/dbCon.php');             // Include this file
require_once('./php/Functions/cloud.php');
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
        $sqlInsert = "INSERT INTO `empleo_cv`.`empleados` (`nombre`, `apellido`, `telefono`, `correo`, `curriculum`) VALUES ('".$nombre."', '".$apellido."', '".$telefono."', '".$correo."', '".$filepath."');";              // Insert/Update/Delete Statements:
        $count = $this->dataCon->runQuery($sqlInsert);     // Use this method to run inserts/updates/deletes
        
        return $count;
    }
}
$dbConn=DbOperations($localhost);
?>