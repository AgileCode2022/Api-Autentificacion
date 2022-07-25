<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Autentificacion/utils/autoload.php"; 

    class OficinaControlador{

        public static function Autenticar($email,$password){
            $u = new OficinaModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Autenticar();
            
            
        }

        public static function ObtenerTodos(){
            $u = new OficinaModelo();
            $personas = $u -> ObtenerTodos();
            
            $resultado = [];
            foreach($personas as $persona){
                $t = [
                    'email' => $persona -> Email,
                ];
                
                array_push($resultado,$t);
            }
            return $resultado;     
        }
    }