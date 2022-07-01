<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php";

    $email = $_POST['email'];
    $password = $_POST['password'];


   UsuarioControlador::Autenticar($email,$password);
   //OficinaControlador::Autenticar($email,$password);

     

     