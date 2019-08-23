<?php

class User
{
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $cvfile;

    public function __construct(array $data, array $file)
    {
        $this->nombre = isset($data['nombre']) ? trim($data['nombre']) : null;
        $this->apellido = isset($data['apellido']) ? trim($data['apellido']) : null;
        $this->telefono = isset($data['telefono']) ? trim($data['telefono']) : null;
        $this->correo = isset($data['correo']) ? trim($data['correo']) : null;
        if ($file['error']['cvfile'] === UPLOAD_ERR_OK) {
            $this->cvfile = [
               // 'base64' => base64_encode(file_get_contents($file['tmp_name']['cvfile'])),
                'type' => $file['type']['cvfile'],
                'name' => $file['name']['cvfile'],
                'path'=> $file['tmp_name']['cvfile']
            ];
        }
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getCvfile()
    {
        return $this->cvfile;
    }

    public function setCvfile($cvfile)
    {
        $this->cvfile = $cvfile;
    }
    public function expose()
    {
        return get_object_vars($this);
    }
}
?>