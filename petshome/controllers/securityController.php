<?php

class securityController extends Security {

public function signin(){
        
    session_start();
        
    $user = parent::validateLogin($_POST['email']);
    $estado = $user->estado;
      
        if(!is_object($user)) die('<script type="text/javascript">
        alert("El usuario no se encuentra registrado");window.location.href="?controller=index&method=signin";
        </script>');
            
            if($estado==1){
                if(password_verify($_POST['password'], $user->password)){  
                    $rol = $user->rol_id;
                    switch($rol){
                    case 1:
                        $_SESSION['usuario']=$user;
                        header('location: ?controller=administrador');
                    break;
    
                    case 2:
                    $_SESSION['usuario']=$user;
                    header('location: ?controller=usuario');
                    break;
                    }
                } else {
                    '<script type="text/javascript">
                    alert("Las contraseñas son incorrectas");window.location.href="?controller=index&method=signin";
                    </script>';
                }
            } else {
                '<script type="text/javascript">
                alert("El usuario se encuentra inactivo, comuniquese con el administrador");window.location.href="?controller=index&method=signin";
                </script>';
            }
           
 
}
  
public function logout(){
        unset($_SESSION['usuario']);
        session_destroy();
        header('location:?controller=index');
    }

}
?>