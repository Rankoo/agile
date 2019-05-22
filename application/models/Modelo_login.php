<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Modelo_login extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function inicio($data)
  {
    $query = $this->db->query("SELECT cargo FROM usuarios WHERE email = '$data'");
    $cargo_usuario = $query->row()->cargo;
    return $cargo_usuario;

}
}


?>
