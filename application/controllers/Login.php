<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     $this->load->model("Modelo_login");
  }

  public function index(){
    $this->load->view('parts/header');
    $this->load->view('sesions/login');
    $this->load->view('parts/footer');
  }
  public function exito(){
    $this->load->view('parts/header');
    $this->load->view('registro_exitoso');
    $this->load->view('parts/footer');
  }
  public function informacion_adicional()
  {
    $this->load->view('parts/header');
    $this->load->view('adicional');
    $this->load->view('parts/footer');
  }
  public function ingreso()
  {
    $correo = $this->input->post('usuario');
    $contrasena = $this->input->post('contrasena');
    $cargo = $this->Modelo_login->inicio($correo);
    $_SESSION['cargo'] = $cargo;
      header('location:'.base_url('index.php/Welcome/index_'.$cargo));
  }

  public function salida()
  {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '',time() -42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
      );
    }
    session_destroy();
    header('location:'.base_url('index.php/login'));
  }
}

 ?>
