<?php

class indexController extends usuarios{

    public function index(){
        require_once 'views/layouts/header_index.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    } 

    public function create(){
        require_once 'views/layouts/header_index.php';
        require_once 'views/index/create.php';
        require_once 'views/layouts/footer.php';
    } 
    public function signup(){
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    echo parent::register($_POST) ? '<script type="text/javascript">
    alert("Registro realizado con exito");window.location.href="?controller=index&method=signin";
    </script>' :  '<script type="text/javascript">
    alert("Error en el registro, intentelo nuevamente");window.location.href="?controller=index&method=create";
    </script>';
    } 
    public function signin(){
        require_once 'views/layouts/header_index.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
    } 

}

?>