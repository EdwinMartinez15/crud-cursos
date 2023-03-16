<?php
    class Gestor{
        private $id;
        private $nombre;
        private $tipo_usuario;
        private $usuario;
        private $clave;


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
    }
?>