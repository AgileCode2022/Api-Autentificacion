<?php

 

    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-Autentificacion/modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-Autentificacion/modelos/$clase.class.php";

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-Autentificacion/controladores/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-Autentificacion/controladores/$clase.class.php";
        }
        
    });

    require_once $_SERVER['DOCUMENT_ROOT'] . "/Api-Autentificacion/config.php";
    
    //if(!conexion){
      //  session_start();
    //*/
   
