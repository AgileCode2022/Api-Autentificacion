<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php"; 

    class OficinaControlador{

        public static function Autenticar($email,$password){
            $u = new OficinaModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Autenticar();
        
        }
    }