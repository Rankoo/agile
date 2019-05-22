<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelo_registros extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function registro($data,$data2){

    if (password_verify($data2,$data["contrasena"])){
      $query = $this->db->insert('usuarios', $data);
      header('location:'.base_url('index.php/login/informacion_adicional'));
    }else {
      echo ":c";
    }
  }

}


?>
