<?php
    class Gestor{
        private $id;
        private $nombre;
        private $apellidos;
        private $documento;
        private $correo;
        private $direccion;
        private $tipo_usuario;
        private $usuario;
        private $clave;
        private $sede;


        function __construct(){}
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        public function getDocumento(){
            return $this->documento;
        }
        public function setDocumento($documento){
            $this->documento = $documento;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function getTipo_usuario(){
            return $this->tipo_usuario;
        }
        public function setTipo_usuario($tipo_usuario){
            $this->tipo_usuario = $tipo_usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function getClave(){
            return $this->clave;
        }
        public function setClave($clave){
            $this->clave = $clave;
        }
        public function getSede(){
            return $this->sede;
        }
        public function setSede($sede){
            $this->sede = $sede;
        }

    }
?>