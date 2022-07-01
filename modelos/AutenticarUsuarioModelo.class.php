<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php"; 

    class UsuarioModelo extends Modelo{

        public function Autenticar(){
            $sql = "SELECT password FROM usuario WHERE email = '" . $this -> Email . "'";
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
    
    }