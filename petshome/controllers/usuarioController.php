<?php

class usuarioController extends usuario{

    public function index(){
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/index.php';
        require_once 'views/layouts/footer_usuario.php';
    } 

    public function profile(){
        $change = parent::find_user($_GET['id_user']);
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/profile.php';
        require_once 'views/layouts/footer_usuario.php';
    } 
    public function account(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::update_profile($_POST) ? header('location: ?controller=usuario') : 'error';
    }
    public function registro(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/pet_register.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function comunidad(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/comunidad.php';
        require_once 'views/layouts/footer_usuario.php';
    }

    public function registro_pet(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        
        echo parent::registrar($_POST) ? header('location:?controller=usuario') : 'Error en el registro';
    }

    public function call_animal(){
        parent::about_animal($_GET['id_user']);
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/animales.php';
        require_once 'views/layouts/footer_usuario.php';
    }
      public function dogs(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/dogs.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function cats(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/cats.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function rabbits(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/rabbits.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function birds(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/birds.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function fishes(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/fishes.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function turtles(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/turtles.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    public function hamsters(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/hamsters.php';
        require_once 'views/layouts/footer_usuario.php';
    }
    
    public function delete(){
        echo parent::eliminar($_GET['id_informacion']) ? header('location: ?controller=usuario') : header('location: ?controller=usuario');
     } 
     public function update_post(){
        $about = parent::find_post($_GET['id_informacion']);

        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/edit_informacion.php';
        require_once 'views/layouts/footer_usuario.php';
    } 
    public function actualizacion(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        
        echo parent::modificar($_POST) ? header('location:?controller=usuario') : 'Error en la modificación de datos';
    }
}
?>