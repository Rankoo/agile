<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelo extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
//FUNCIONES SOBRE LOS TEMAS:

    //Manda los temas al controlador para su posterios uso
    public function temas(){
      $query = $this->db->query("SELECT * FROM temas ORDER BY `temas`.`id_tema` ASC");
      return $query->result();
    }
    //Guarda los temas recojidos por el controlador
    public function guardartema($data, $data2){
    $query = $this->db->query("INSERT INTO temas (tema,color) VALUES ('$data','$data2')");
    }
    //Actualiza un tema atraves de los datos recojidos por el controlador
    public function actualizartema($data,$data2){
      $id = $this->db->query("SELECT * FROM temas WHERE id_tema = '$data2' ");
      $idstring = $id->row()->id_tema;
      $query = $this->db->query("UPDATE temas SET tema = '$data' WHERE id_tema = $idstring");
    }
    //Retorna un tema agregado por medio de la pagina atraves del controlador
    public function mostrartema($data){
      $query = $this->db->query("SELECT * FROM temas WHERE tema = '$data'");
      return $query->result();
    }

//FUNCIONES SOBRE LOS CONTENIDOS:

    //Resgistra un contenido nuevo
    public function guardarsubtema($data,$data2){
      $query = $this->db->query("INSERT INTO subtemas (subtema,id_tema) VALUES ('$data','$data2') ");
    }
    //Retorna un dato con un tema en cespecifico
    public function mostarsbtema($data){
      $query = $this->db->query("SELECT id_subtema,subtema,c.id_tema,color FROM subtemas c INNER JOIN temas t ON c.id_tema = t.id_tema WHERE c.id_tema = '$data'");
      return $query->result();
    }

    public function actualizarsbtema($data,$data2){
      $query = $this->db->query(" UPDATE subtemas SET subtema = '$data' WHERE id_subtema = $data2");
    }

    public function borrarsubtema($data){
      $query = $this ->db->query(" DELETE FROM subtemas WHERE id_subtema = '$data'");
    }

    public function borrartemas($data){
      $query = $this->db->query(" DELETE FROM subtemas WHERE id_tema ='$data' ");
      $query = $this->db->query(" DELETE FROM temas WHERE id_tema ='$data' ");
    }

//FUNCIONES SOBRE OTROS DATOS:
    public function texto($data){
      $query = $this->db->query(" SELECT * FROM contenidos c INNER JOIN subtemas s ON c.id_subtema = s.id_subtema WHERE c.id_subtema ='$data' ");
      return $query->result();
    }
    public function crearTexto($data,$data2){
      $query = $this->db->query(" INSERT INTO contenidos(id_subtema,comentario) VALUES('$data','$data2') ");
      if ($query) {
      }
    }
    public function modificarTexto($data,$data2){
      $query = $this->db->query("UPDATE contenidos SET comentario = '$data2' WHERE id_subtema = $data");
    }
    public function eliminarTexto($data){
      $query = $this->db->query(" DELETE FROM contenidos WHERE id_subtema = '$data' ");
    }



    public function imagenes($data,$data2){
      $query = $this->db->query(" INSERT INTO imagenes(id_subtema,imagen) VALUES('$data','$data2') ");
      header('location:'.base_url('index.php/Welcome/index_admin'));

    }
    public function mostar_imagenes($data){
      $query = $this->db->query(" SELECT * FROM imagenes WHERE id_subtema = '$data' ");
      return $query->result();
    }
    public function eliminarImagen($data){
      $query = $this->db->query(" DELETE FROM imagenes WHERE id_imagen = '$data' ");
    }

}



 ?>
