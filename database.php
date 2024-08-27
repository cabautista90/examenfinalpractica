<?php

class database{

    const servidor="localhost";
    const usuario="root";
    const clave="";
    const nombrebd="examenfinalpractica";

    public static function Conectar(){
        try{
            $conexion = new PDO
            ("mysql:host=".self::servidor.";dbname=".
            self::nombrebd.";chartset=utf8",self::usuariobd,
            self::clave);

            $conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $conexion;

        }catch(PDOException $e){
            return "fallo ".$e->getMessage();
        }
    }
}
