<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct()
	 {
	 		parent::__construct();
			$this->load->model("Modelo");
	 }
	 //Carga las vistas
		public function index_admin(){
			$datos['data'] = $this->Modelo->temas();
			$this->load->view('parts/header');
			$this->load->view('modals/modal_1');
			$this->load->view('modals/modal_2');
			$this->load->view('modals/modal_3');
			$this->load->view('modals/modal_4');
			$this->load->view('sesions/vista admin/index',$datos);
			$this->load->view('parts/footer');
		}

		public function index_aprendiz(){
			$this->load->view('parts/header');
			$this->load->view('sesions/vista aprendiz/index');
			$this->load->view('parts/footer');
		}

		//Recoje prametros para usarlos en las funciones "guardartema" y "mostrartema"
		public function guardar(){
			$nuevo_tema = $this->input->post("nombre");
			$nuevo_color = $this->input->post("color");
		 	$this->Modelo->guardartema($nuevo_tema,$nuevo_color);
		 	$mostrar_nuevo_tema = $this->Modelo->mostrartema($nuevo_tema,);
		 	echo json_encode($mostrar_nuevo_tema);
		}
		//Recoje los parametros para usarlos en la funcion "actualizartema"
		public function actualizartema(){
			$act_tema = $this->input->post("tactualizado");
			$tema = $this->input->post("tema");
		 	$this->Modelo->actualizartema($act_tema,$tema);
		}
		//Retorna un JSON de los temas atraves de la funcion "temas"
		public function temamas(){
			$jtemas = $this->Modelo->temas();
			echo json_encode($jtemas);
		}

		public function mostrarsubtemas(){
			$data = $this->input->post("id_tema");
			$resultado = $this->Modelo->mostarsbtema($data);
			echo json_encode($resultado);
		}


		//Retorna un JSON de los contenidos atraves de la funcion "contenidos"
		public function contemamas(){
			$jcontenido = $this->Modelo->contenidos();
			echo json_encode($jcontenido);
		}
		//Retorna un JSON de contenidos con un tema en comun usando la funcion "contenidos_especificos"
		public function guardarsubtema(){
			$tema = $this->input->post("tema");
			$contenido = $this->input->post("sbtema");
			$this->Modelo->guardarsubtema($contenido,$tema);
			$sbtema_act = $this->Modelo->mostarsbtema($contenido);
			echo json_encode($sbtema_act);
		}
		//:v
		public function act_subtemas(){
			$tema = $this->input->post("tema_seleccionado");
			$consulta = $this->Modelo->mostarsbtema($tema);
			echo json_encode($consulta);
		}
		public function act_subtemas2(){
			$tema = $this->input->post("tema_seleccionado");
			$consulta = $this->Modelo->mostarsbtema($tema);
			echo json_encode($consulta);
		}

		Public function actualizar_subtemas(){
			$tema = $this->input->post("tema_seleccionado");
			$subtema = $this->input->post("subtema");
			$consulta = $this->Modelo->actualizarsbtema($subtema,$tema);
		}
		public function mostrarsubtemas2(){
			$tema = $this->input->post("tema_seleccionado");
			$consulta = $this->Modelo->mostarsbtema($tema);
			echo json_encode($consulta);
		}
		public function borrarsubtema(){
			$subtema = $this->input->post("subtema_seleccionado");
			$consulta = $this->Modelo->borrarsubtema($subtema);
		}
		public function borrartema(){
			$tema = $this->input->post("tema_seleccionado");
			$consulta = $this->Modelo->borrartemas($tema);
		}
		// Funciones relacionadas a los textos-------------------------------------------
		public function texto(){
			$subtema = $this->input->post("subtema_seleccionado");
			$consulta = $this->Modelo->texto($subtema);
			echo json_encode($consulta);
		}
		public function crearTexto(){
			$subtema = $this->input->post("subtema_seleccionado");
			$comentario = $this->input->post("texto");
			$consulta = $this->Modelo->crearTexto($subtema,$comentario);
		}
		public function modificarTexto(){
			$subtema = $this->input->post("subtema_seleccionado");
			$comentario = $this->input->post("texto");
			$consulta = $this->Modelo->modificarTexto($subtema,$comentario);
		}
		public function eliminarTexto(){
			$modificacion = $this->input->post("texto_seleccionado");
			$consulta = $this->Modelo->eliminarTexto($modificacion);
		}

		// Funciones relacionadas a las imagenes-----------------------------------------
		public function insertar_imagenes()
		{
			$subtema = $this->input->post("versubtemas3");
			$nombre_carpeta = $subtema."/";
			$dir_subida     = 'Imagenes/'.$nombre_carpeta;
			$nombre_archivo = str_replace("\t", " ", basename($_FILES['file']['name']));
			if (!is_dir("Imagenes/$nombre_carpeta")) {
              mkdir("Imagenes/$nombre_carpeta");
            }
			$fichero_subido = $dir_subida . $nombre_archivo;
			move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido);
			echo $fichero_subido;

			$consulta = $this->Modelo->imagenes($subtema,$fichero_subido);

		}
		public function mostrarImagenes(){
			$subtema = $this->input->post("subtema_seleccionado");
			$consulta = $this->Modelo->mostar_imagenes($subtema);
			echo json_encode($consulta);
		}
		public function borrarImagen(){
			$imagen = $this->input->post("imagen_seleccionada");
			$ruta = $this->input->post("ruta");
			$consulta = $this->Modelo->eliminarImagen($imagen);
			$ruta_completa = base_url($ruta);

			print_r($ruta);
			unlink($ruta);
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
