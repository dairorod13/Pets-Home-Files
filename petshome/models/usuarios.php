<?php
//Herencia
class usuarios extends Database{

   
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO usuarios (nombre_user, apellido_user, fecha_user, documento_id, numero_doc, direccion_ciudad, telefono_user, correo_user, password, rol_id, estado) VALUES (?,?,?,?,?,?,?,?,?,2,1)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['apellido'], PDO::PARAM_STR);
            $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(4, $data['documento'], PDO::PARAM_INT);
            $result->bindParam(5, $data['numero'], PDO::PARAM_INT);
            $result->bindParam(6, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(7, $data['telefono'], PDO::PARAM_INT);
            $result->bindParam(8, $data['email'], PDO::PARAM_STR);
            $result->bindParam(9, $data['password'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

}
?>