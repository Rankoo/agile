<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     $this->load->helper(array());
     $this->load->model("Modelo_registros");
  }

  public function index(){
    $this->load->view('parts/header');
    $this->load->view('registro');
    $this->load->view('parts/footer');
  }

  public function create(){
    $contrasena = $this->input->post('contrasena');
    $contrasena2 = $this->input->post('contrasena2');
    $email = $this->input->post('email');
    $nombre = $this->input->post('nombre');
    $apellido = $this->input->post('apellido');


    $usuario = array(
      "cargo" => "aprendiz",
      "contrasena" => password_hash($contrasena, PASSWORD_DEFAULT),
      "email" => $email,
      "nombre" => $nombre,
      "apellido" => $apellido,
    );

    // echo $usuario["cargo"];
    $_SESSION['cargo'] = $usuario['cargo'];
    $this->Modelo_registros->registro($usuario,$contrasena2);
  }



}

 ?>
