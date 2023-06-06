<?php
class Conexion{
    public static function IniciarConexion(){
        $conexion=new PDO("mysql:host=127.0.0.1;dbname=l20370961;charset=utf8", "l20370961", "MLJ61+it25");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }
}
?>