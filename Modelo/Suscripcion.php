<?php

class Suscripcion{
    private $id;
    private $fec_ini;
    private $fec_fin;
    private $num_tar;
    private $fec_tar;
    private $cvv;
    private $pais;
    private $id_usuario;
    private $id_planes;


    public function __construct($id, $fec_ini, $fec_fin, $num_tar, $fec_tar, $cvv, $pais, $id_usuario, $id_planes) {
        $this->id = $id;
        $this->fec_ini = $fec_ini;
        $this->fec_fin = $fec_fin;
        $this->num_tar = $num_tar;
        $this->fec_tar = $fec_tar;
        $this->cvv = $cvv;
        $this->pais = $pais;
        $this->id_usuario = $id_usuario;
        $this->id_planes = $id_planes;
    }

    public function getId() {
        return $this->id;
    }
    public function getFec_ini() {
        return $this->fec_ini;
    }
    public function getFec_fin() {
        return $this->fec_fin;
    }
    public function getNum_tar() {
        return $this->num_tar;
    }
    public function getFec_tar() {
        return $this->fec_tar;
    }
    public function getCvv() {
        return $this->cvv;
    }
    public function getPais() {
        return $this->pais;
    }
    public function getId_usuario() {
        return $this->id_usuario;
    }
    public function getId_planes() {
        return $this->id_planes;
    }
    public function setId($id): void {
        $this->id = $id;
    }
    public function setFec_ini($fec_ini): void {
        $this->fec_ini = $fec_ini;
    }
    public function setFec_fin($fec_fin): void {
        $this->fec_fin = $fec_fin;
    }
    public function setNum_tar($num_tar): void {
        $this->num_tar = $num_tar;
    }
    public function setFec_tar($fec_tar): void {
        $this->fec_tar = $fec_tar;
    }
    public function setCvv($cvv): void {
        $this->cvv = $cvv;
    }
    public function setPais($pais): void {
        $this->pais = $pais;
    }
    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }
    public function setId_planes($id_planes): void {
        $this->id_planes = $id_planes;
    }
}