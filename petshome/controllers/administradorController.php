<?php

class administradorController extends administrador{

    public function index(){
        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/index.php';
        require_once 'views/layouts/footer_administrador.php';
    } 
    
    public function profile(){
        $change = parent::find_user($_GET['id_user']);

        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/profile.php';
        require_once 'views/layouts/footer_administrador.php';
    } 
    public function account(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::update_profile($_POST) ? 'Registro correcto.' : 'Error en el registro';
    }
    public function users_system(){
        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/user.php';
        require_once 'views/layouts/footer_administrador.php';
    }     
    public function pets_system(){
        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/gestion_mascotas.php';
        require_once 'views/layouts/footer_administrador.php';
    }   
    public function estado(){
        $user = parent::usuario($_GET['id_user']);

        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/estado.php';
        require_once 'views/layouts/footer_administrador.php';
    } 
    public function cambiar(){
        $user = parent::state($_POST) ? header('location: ?controller=administrador&method=users_system') : 'error';
    } 
    public function delete(){
       echo parent::eliminar($_GET['id_informacion']) ? header('location: ?controller=administrador&method=pets_system') : header('location: ?controller=administrador&method=pets_system');
    } 
  
}

?>