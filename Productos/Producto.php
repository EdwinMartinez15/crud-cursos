<?php
    class Producto{
        private $id;
        private $nombre;
        private $tipo;
        private $proveedor;
        private $costo_venta;
        private $costo_compra;
        private $cantidad;


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
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getProveedor(){
            return $this->proveedor;
        }
        public function setProveedor($proveedor){
            $this->proveedor= $proveedor;
        }
        
        public function getCosto_venta(){
            return $this->costo_venta;
        }
        public function setCosto_venta($costo_venta){
            $this->costo_venta= $costo_venta;
        }
        public function getCosto_compra(){
            return $this->costo_compra;
        }
        public function setCosto_compra($costo_compra){
            $this->costo_compra= $costo_compra;
        }
        
        public function getCantidad(){
            return $this->cantidad;
        }
        public function setCantidad($cantidad){
            $this->cantidad= $cantidad;
        }
    }
?>