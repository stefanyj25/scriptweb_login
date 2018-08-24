<?php

include '../../controllers/UserController.php';

if(isset($_POST['correo_users']) && isset($_POST['pass_users'])){

  $correo_users = $_POST['correo_users'];
  $pass_users = $_POST['pass_users'];

  if( UserController::login($correo_users, $pass_users)){
    session_start();
    $_SESSION['correo_users'] = $_POST['correo_users'];

    header('Location: http://localhost/scriptweb/views/admin/index.php');
  }
}
