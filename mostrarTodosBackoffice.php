<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Autentificacion/utils/autoload.php";

    header("Content-Type:application/json");

    $data = json_encode(OficinaControlador::ObtenerTodos());

    echo $data;
  