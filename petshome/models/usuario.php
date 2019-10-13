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
      $result->bindParam(8, $data['email'], PDO::PARAM_STR);
      $result->bindParam(9, $data['password'], PDO::PARAM_STR);
      $result->bindParam(10, $data['id_user'], PDO::PARAM_INT);
      return $result->execute();
  }catch (Exception $e){
     die("Error User->register() " . $e->getMessage());
  }
}
   public function registrar($data){
      try{
          $result = parent::connect()->prepare("INSERT INTO about_animal (fecha, titulo, descripcion, especie, nombre, raza, edad, sexo_id, imagen, mascota_id, user_id) VALUES (?,?,?,?,?,?,?,?,?,1,?)");
          $result->bindParam(1, $data['fecha'], PDO::PARAM_STR);
          $result->bindParam(2, $data['titulo'], PDO::PARAM_STR);
          $result->bindParam(3, $data['descripcion'], PDO::PARAM_STR);
          $result->bindParam(4, $data['especie'], PDO::PARAM_STR);
          $result->bindParam(5, $data['nombre_pet'], PDO::PARAM_STR);
          $result->bindParam(6, $data['raza'], PDO::PARAM_STR);
          $result->bindParam(7, $data['edad'], PDO::PARAM_STR);
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
public function about_user($id){
   $result = parent::connect()->prepare("SELECT * FROM usuarios WHERE id_user = ?");
   $result->bindParam(1, $id, PDO::PARAM_INT);
   $result->execute();
   return $result->fetch();
}
public function about_animal(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE user_id = ?");
   $result->bindParam(1, $_GET['id_user'], PDO::PARAM_INT);
   $result->execute();
   return $result->fetchAll();
}
public function dogs(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 1");
   $result->execute();
   return $result->fetchAll();
}
public function cats(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 2");
   $result->execute();
   return $result->fetchAll();
}
public function rabbits(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 3");
   $result->execute();
   return $result->fetchAll();
}
public function birds(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 4");
   $result->execute();
   return $result->fetchAll();
}
public function fishes(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 5");
   $result->execute();
   return $result->fetchAll();
}
public function turtles(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 6");
   $result->execute();
   return $result->fetchAll();
}
public function hamsters(){
   $result = parent::connect()->prepare("SELECT * FROM about_animal INNER JOIN especies ON about_animal.especie = especies.id_especie INNER JOIN sexos ON about_animal.sexo_id = sexos.id_sexo WHERE especie = 7");
   $result->execute();
   return $result->fetchAll();
}
public function find_post($id_i){
   $result = parent::connect()->prepare("SELECT * FROM about_animal  WHERE id_informacion = ?");
   $result->bindParam(1, $id_i, PDO::PARAM_INT);
   $result->execute();
   return $result->fetch();
}
public function modificar($data){
   try{
       $result = parent::connect()->prepare("UPDATE about_animal SET fecha = ?, titulo = ?, descripcion = ?, especie = ?, nombre = ?, raza = ?, edad = ?, sexo_id = ?, imagen = ?, mascota_id = 1, user_id = ? WHERE id_informacion = ?");
       $result->bindParam(1, $data['fecha'], PDO::PARAM_STR);
       $result->bindParam(2, $data['titulo'], PDO::PARAM_STR);
       $result->bindParam(3, $data['descripcion'], PDO::PARAM_STR);
       $result->bindParam(4, $data['especie'], PDO::PARAM_STR);
       $result->bindParam(5, $data['nombre_pet'], PDO::PARAM_STR);
       $result->bindParam(6, $data['raza'], PDO::PARAM_STR);
       $result->bindParam(7, $data['edad'], PDO::PARAM_STR);
       $result->bindParam(8, $data['sexo'], PDO::PARAM_INT);
       $result->bindParam(9, $data['imagen'], PDO::PARAM_STR);
       $result->bindParam(10, $data['id_user'], PDO::PARAM_INT);
       $result->bindParam(11, $data['id_informacion'], PDO::PARAM_INT);
       return $result->execute();
   }catch (Exception $e){
      die("Error User->register() " . $e->getMessage());
   }
}
public function eliminar($inf){
   $result = parent::connect()->prepare("DELETE FROM about_animal  WHERE id_informacion = ?");
   $result->bindParam(1, $inf, PDO::PARAM_INT);
   $result->execute();
}
}
?>