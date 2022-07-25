<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Autentificacion/utils/autoload.php"; 

    class OficinaModelo extends Modelo{

        public function Autenticar(){
            $sql = "SELECT password FROM backoffice WHERE email = '" . $this -> Email . "'";
            $resultado = $this -> conexion -> query($sql);
            

            if($resultado -> num_rows == 0)
                echo "Usuario no existe";
            else {
                $fila = $resultado -> fetch_all(MYSQLI_ASSOC)[0]; 
                $passwordHasheado = $fila['password'];
                     
                if(password_verify($this -> Password, $passwordHasheado)){
                    echo "Contraseña Correcta";
                }

            }

        }

        public function ObtenerTodos(){
            
            $sql = "SELECT * FROM backoffice";
            $filas = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $elementos = [];
            foreach($filas as $fila){
                $u = new OficinaControlador();
                $u -> Email = $fila['email'];
                array_push($elementos, $u);

            }

            return $elementos;
             
        }
    
    }