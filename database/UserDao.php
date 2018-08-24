<?php

include 'Conexion.php';
include '../../models/User.php';

class UserDao extends Conexion
{
  protected static $cnx;

  private static function getConexion()
  {
    self::$cnx = Conexion::conectar();
  }

  private static function desconectar()
  {
    self::$cnx = null;
  }

  public static function login ($user)
  {
       $query = ("SELECT *
                  FROM users
                  WHERE correo_users = :correo_users");

                self::getConexion();

                $correo_users = $user->getcorreo_users();

                $resultado = self::$cnx->prepare($query);
                $resultado->bindParam(":correo_users", $correo_users);

                $resultado->execute();

                if($resultado->rowCount() > 0){
                  $row = $resultado->fetch(PDO::FETCH_ASSOC);

                  if( password_verify($_POST['pass_users'], $row['pass_users']) ){

                      if($row['correo_users'] == $correo_users){
                          return true;
                      }

                  } else {
                      echo "Password o email invalido";
                  }

                }

  }
}
