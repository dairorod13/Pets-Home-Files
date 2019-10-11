<?php

class usuarioController extends usuario{

    public function index(){
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/index.php';
        require_once 'views/layouts/footer.php';
    } 

    public function profile(){
        $change = parent::find_user($_GET['id_user']);
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/profile.php';
        require_once 'views/layouts/footer.php';
    } 
    public function account(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::update_profile($_POST) ? header('location: ?controller=usuario') : 'error';
    }
    public function registro(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/pet_register.php';
        require_once 'views/layouts/footer.php';
    }
    public function comunidad(){
        
        require_once 'views/layouts/header_usuario.php';
        require_once 'views/usuario/comunidad.php';
        require_once 'views/layouts/footer.php';
    }

    public function registro_pet(){
        var_dump($_FILES);
        $url_path = 'assets/imagen/' . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $url_path);
        $_POST['imagen'] = $url_path;
        
        echo parent::registrar($_POST) ? header('location:?controller=usuario') : 'Error en el registro';

    }
    
}
?>