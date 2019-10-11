<?php
//Herencia
class usuario extends database{

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
      $result = parent::connect()->prepare("UPDATE usuarios SET nombre_user = ?, apellido_user= ?, fecha_user = ?, documento_id = ?, numero_doc = ?, direccion_ciudad = ?, telefono_user = ?, correo_user = ? , password = ?, rol_id = 2, estado = 1   WHERE id_user = ?");
      $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
      $result->bindParam(2, $data['apellido'], PDO::PARAM_STR);
      $result->bindParam(3, $data['fecha'], PDO::PARAM_STR);
      $result->bindParam(4, $data['documento'], PDO::PARAM_INT);
      $result->bindParam(5, $data['numero'], PDO::PARAM_INT);
      $result->bindParam(6, $data['direccion'], PDO::PARAM_STR);
      $result->bindParam(7, $data['telefono'], PDO::PARAM_INT);
      $result->bindParam(8, $data['correo'], PDO::PARAM_STR);
      $result->bindParam(9, $data['password'], PDO::PARAM_STR);
      $result->bindParam(10, $data['id_user'], PDO::PARAM_INT);
      return $result->execute();
  }catch (Exception $e){
     die("Error User->register() " . $e->getMessage());
  }
}
   public function registrar($data){
      try{
          $result = parent::connect()->prepare("INSERT INTO about_animal (fecha, titulo, descripcion, especie, nombre, raza, edad, sexo_id, imagen, user_id) VALUES (?,?,?,?,?,?,?,?,?,?)");
          $result->bindParam(1, $data['fecha'], PDO::PARAM_STR);
          $result->bindParam(2, $data['titulo'], PDO::PARAM_STR);
          $result->bindParam(3, $data['descripcion'], PDO::PARAM_STR);
          $result->bindParam(4, $data['especie'], PDO::PARAM_STR);
          $result->bindParam(5, $data['nombre_pet'], PDO::PARAM_STR);
          $result->bindParam(6, $data['raza'], PDO::PARAM_STR);
          $result->bindParam(7, $data['edad'], PDO::PARAM_INT);
          $result->bindParam(8, $data['sexo'], PDO::PARAM_INT);
          $result->bindParam(9, $data['imagen'], PDO::PARAM_STR);
          $result->bindParam(10, $data['id_user'], PDO::PARAM_INT);
          return $result->execute();
      }catch (Exception $e){
         die("Error User->register() " . $e->getMessage());
      }
  }
  public function all(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal");
   $result->execute();
   return $result->fetchAll();
}
public function about_user(){
   $result = parent::connect()->prepare("SELECT * FROM usuarios");
   $result->execute();
   return $result->fetchALL();
}
}
?>