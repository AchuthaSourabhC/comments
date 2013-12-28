<?php

	class Comment extends Control{

		function __construct(){
			parent::__construct();
		}
		
		public function show(){
			$res = $this->model->loadAll();
			echo json_encode($res);
		}
		
		public function add(){
			$res = $this->model->add();
			echo json_encode($res);
		}

		public function index(){
			
			echo $this->twig->render('comment/index.html', array('host' => HOST));
		}

	}