<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Autentificacion/utils/autoload.php";

    

    header("Content-Type:application/json");

    $data = json_encode(UsuarioControlador::Autenticar($email, $password));

    echo $data;
  
  

     

     