<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php"; 

    class UsuarioControlador{

        public static function Autenticar($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Autenticar();
        
        }
    }