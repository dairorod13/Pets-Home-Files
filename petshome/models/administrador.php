<?php
//Herencia
class administrador extends Database{

   public function find_user($id){
      try{
         $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
         $result->bindParam(1, $id, PDO::PARAM_INT);
         $result->execute();
         return $result->fetch();
     }catch (Exception $e){
        die("Error User->register() " . $e->getMessage());
     }
   }

    public function update_profile($var){
      
     $result = parent::connect()->prepare("UPDATE usuarios SET nombre_user = ?, apellido_user = ?, fecha_user = ?, documento_id = ?, numero_doc = ?, direccion_ciudad = ?, telefono_user = ?, correo_user = ?, password = ?, rol_id = 1, estado = 1 WHERE id_user = ? ");
     $result->bindParam(1, $var['nombre'], PDO::PARAM_STR);
     $result->bindParam(2, $var['apellido'], PDO::PARAM_STR);
     $result->bindParam(3, $var['fecha'], PDO::PARAM_STR);
     $result->bindParam(4, $var['documento'], PDO::PARAM_INT);
     $result->bindParam(5, $var['numero'], PDO::PARAM_INT);
     $result->bindParam(6, $var['direccion'], PDO::PARAM_STR);
     $result->bindParam(7, $var['telefono'], PDO::PARAM_INT);
     $result->bindParam(8, $var['email'], PDO::PARAM_STR);
     $result->bindParam(9, $var['password'], PDO::PARAM_STR);
     $result->bindParam(10, $var['id_user'], PDO::PARAM_INT);
     $result->execute();
    }

   public function all(){
      $result = parent::connect()->prepare("SELECT * FROM usuarios INNER JOIN roles ON usuarios.rol_id = roles.id_rol INNER JOIN documentos ON usuarios.documento_id = documentos.id_documento INNER JOIN estados ON usuarios.estado = estados.id_estado WHERE rol_id = 2");
      $result->execute();
      return $result->fetchAll();
  }

}
?>