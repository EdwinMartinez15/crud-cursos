<?php
    class Usuario{
        private $id;
        private $nombres;
        private $codigo;


        function __construct(){}
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getNombre(){
            return $this->nombres;
        }
        public function setNombre($nombres){
            $this->nombres = $nombres;
        }
        public function getCodigo(){
            return $this->codigo;
        }
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    }
?>