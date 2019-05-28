<?php 

	class Controller_registrar extends Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->generate("registrar_view.php", "template_view.php");
		}
	}
?>