<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aprendiz extends CI_Controller {

  function __construct()
  {
     parent::__construct();
     $this->load->model("Modelo");
  }
  public function index(){
    $this->load->view('parts/header');
    $this->load->view('vista aprendiz/inicio_aprendiz');
    $this->load->view('parts/footer');
  }

}
?>
