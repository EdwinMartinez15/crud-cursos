<?php
    class Usuario{
        private $id;
        private $nombres;
        private $apellidos;
        private $correo;
        private $direccion;
        private $celular;
        private $ciudad;
        private $curso_id;
        private $gestor_id;


        function __construct(){}
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getNombres(){
            return $this->nombres;
        }
        public function setNombres($nombres){
            $this->nombres = $nombres;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
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
        public function getCelular(){
            return $this->celular;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function getCiudad(){
            return $this->ciudad;
        }
        public function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }
        public function getCurso_id(){
            return $this->curso_id;
        }
        public function setCurso_id($curso_id){
            $this->curso_id = $curso_id;
        }
        public function getGestor_id(){
            return $this->gestor_id;
        }
        public function setGestor_id($gestor_id){
            $this->gestor_id = $gestor_id;
        }
        
    }
?>