<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Autentificacion/utils/autoload.php"; 

    class UsuarioControlador{

        public static function Autenticar($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Autenticar();

            $data = json_encode($p);
            return $data;

        
        }

        public static function ObtenerTodos(){
            $u = new UsuarioModelo();
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