<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Autentificacion/utils/autoload.php"; 

    class UsuarioModelo extends Modelo{

        public function Autenticar(){
            $sql = "SELECT password FROM usuario WHERE email = '" . $this -> Email . "'";
            $resultado = $this -> conexion -> query($sql);
            

            if($resultado -> num_rows == 0)
                $p = "Usuario no existe";

                
            else {
                $fila = $resultado -> fetch_all(MYSQLI_ASSOC)[0]; 
                $passwordHasheado = $fila['password'];
                     
                if(password_verify($this -> Password, $passwordHasheado)){
                   $p = "Contraseña Correcta";
                }else{
                   $p = "Usuario y/o contraseña incorrecta";
                }

            }
        
            $data = json_encode($p);
            return $data;
           

        }
    
        public function ObtenerTodos(){
            
            $sql = "SELECT * FROM usuario";
            $filas = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $elementos = [];
            foreach($filas as $fila){
                $u = new UsuarioControlador();
                $u -> Email = $fila['email'];
                array_push($elementos, $u);

            }

            return $elementos;
             
        }
    }