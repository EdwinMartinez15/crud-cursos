<?php
    class Db{
        private static $conexion=NULL;
        private function __construct(){}

        public static function conectar(){
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion=new
            //PDO('mysql:host=localhost;dbname=id20647608_crud','id20647608_edwin','Edwin150501.1',$pdo_options);
            PDO('mysql:host=localhost;dbname=crud-cursos','root','',$pdo_options);
            return self::$conexion;
        }
    }
?>