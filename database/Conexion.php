<?php

class Conexion {

    public static function conectar(){
      try {

          $cn = new PDO("mysql:host=localhost;dbname=scriptwebdb", "root","");

          return $cn;

      } catch (Exception $ex) {
          die($ex->getMessage());
      }

    }
}
