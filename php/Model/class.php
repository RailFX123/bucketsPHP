<?php
class User
{
    private $name;
    private $apellido;
    private $telefono;
    private $email;
    private $direccion;
    private $empleo;
    private $agencia;
    private $archivo;
    private $ID;

    public function __construct(array $data, array $file)
    {
        $this->name = isset($data['name']) ? trim($data['name']) : null;
        $this->apellido = isset($data['apellido']) ? trim($data['apellido']) : null;
        $this->telefono = isset($data['telefono']) ? trim($data['telefono']) : null;
        $this->email = isset($data['email']) ? trim($data['email']) : null;
        $this->direccion = isset($data['direccion']) ? trim($data['direccion']) : null;
        $this->empleo = isset($data['empleo']) ? trim($data['empleo']) : null;
        if ($file['error']['archivo'] === UPLOAD_ERR_OK) {
            $this->archivo = [
                'base64' => base64_encode(file_get_contents($file['tmp_name']['archivo'])),
                'type' => $file['type']['archivo'],
                'name' => $file['name']['archivo']
            ];
        }
        $this->agencia = isset($data['agencia']) ? trim($data['agencia']) : null;
        $this->ID = isset($data['ID']) ? trim($data['ID']) : null;
        $this->telefono = isset($data['tel']) ? trim($data['tel']) : null;
    }
}
