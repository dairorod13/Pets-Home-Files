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
   public function update_profile($data){
      try{
       $result = parent::connect()->prepare("UPDATE usuarios SET nombre_user = ?, apellido_user= ?, fecha_user = ?, documento_id = ?, numero_doc = ?, direccion_ciudad = ?, telefono_user = ?, correo_user = ? , password = ?, rol_id = 1, estado = 1   WHERE id_user = ?");
       $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
       $result->bindParam(2, $data['apellido'], PDO::PARAM_STR);
       $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
       $result->bindParam(4, $data['documento'], PDO::PARAM_INT);
       $result->bindParam(5, $data['numero'], PDO::PARAM_INT);
       $result->bindParam(6, $data['direccion'], PDO::PARAM_STR);
       $result->bindParam(7, $data['telefono'], PDO::PARAM_INT);
       $result->bindParam(8, $data['email'], PDO::PARAM_STR);
       $result->bindParam(9, $data['password'], PDO::PARAM_STR);
       $result->bindParam(10, $data['id_user'], PDO::PARAM_INT);
       return $result->execute();
   }catch (Exception $e){
      die("Error User->register() " . $e->getMessage());
   }
}
   public function all(){
      $result = parent::connect()->prepare("SELECT * FROM usuarios INNER JOIN roles ON usuarios.rol_id = roles.id_rol INNER JOIN documentos ON usuarios.documento_id = documentos.id_documento INNER JOIN estados ON usuarios.estado = estados.id_estado WHERE rol_id = 2");
      $result->execute();
      return $result->fetchAll();
  }
  public function about_user($id){
   $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
   $result->bindParam(1, $id, PDO::PARAM_INT);
   $result->execute();
   return $result->fetch();
}
public function all_pets(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo INNER JOIN usuarios ON about_animal.user_id = usuarios.id_user ");
   $result->execute();
   return $result->fetchAll();
}
public function usuario($id){
   $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
   $result->bindParam(1, $id, PDO::PARAM_INT);
   $result->execute();
   return $result->fetch();
}
public function state($idd){
   try{
    $result = parent::connect()->prepare("UPDATE usuarios SET estado = ?   WHERE id_user = ?");
    $result->bindParam(1, $idd['estado'], PDO::PARAM_INT);
    $result->bindParam(2, $idd['id_user'], PDO::PARAM_INT);
    return $result->execute();
}catch (Exception $e){
   die("Error User->register() " . $e->getMessage());
}
}
public function eliminar($del){
   $result = parent::connect()->prepare("DELETE FROM about_animal WHERE id_informacion = ?");
   $result->bindParam(1, $del, PDO::PARAM_INT);
   $result->execute();
}
}
?>