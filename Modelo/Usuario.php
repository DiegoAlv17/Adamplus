<?php
class Usuario{
    private $id_usuario;
    private $nombre;
    private $email;
    private $contraseña;
    
    public function __construct($id_usuario, $nombre, $email, $contraseña) {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contraseña = $contraseña;
    }
    
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setContraseña($contraseña): void {
        $this->contraseña = $contraseña;
    }
}