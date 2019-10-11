<?php

class administradorController extends administrador{

    public function index(){
        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/index.php';
        require_once 'views/layouts/footer.php';
    } 
    
    public function profile(){
        $change = parent::find_user($_GET['id_user']);

        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/profile.php';
        require_once 'views/layouts/footer.php';
    } 
    public function account(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::update_profile($_POST) ? 'Registro correcto.' : 'Error en el registro';
    }
    public function users_system(){
        require_once 'views/layouts/header_admin.php';
        require_once 'views/administrador/user.php';
        require_once 'views/layouts/footer.php';
    } 
  
}

?>