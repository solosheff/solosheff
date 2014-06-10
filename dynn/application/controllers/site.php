<?php 
	class site extends CI_Controller {
	 function __construct() {
		parent::__construct();
		ini_set('display_errors', 'On');
		error_reporting(E_ALL);
	}
		function index() {
			$this->load->view('/includes/header');
			$this->load->view('index');
			$this->load->view('/includes/footer');			
		}
		function blog() {
			$this->load->model('blog_model');
			$data['records'] = $this->blog_model->getAll();
			$this->load->view('/includes/header');
			$this->load->view('blog', $data);
			$this->load->view('/includes/footer');			
		}
		function cutlery() {
			$sort = $this->input->post('sortBy');
			$this->load->model('cutlery_model');
			$data['records'] = $this->cutlery_model->getAll($sort);
			$this->load->view('/includes/header');
			$this->load->view('cutlery', $data);
			$this->load->view('/includes/footer');			
		}
		function cookware() {
			$sort = $this->input->post('sortBy');
			$this->load->model('cookware_model');
			$data['records'] = $this->cookware_model->getAll($sort);
			$this->load->view('/includes/header');
			$this->load->view('cookware', $data);
			$this->load->view('/includes/footer');			
		}
		function bakeware() {
			$sort = $this->input->post('sortBy');
			$this->load->model('bakeware_model');
			$data['records'] = $this->bakeware_model->getAll($sort);
			$this->load->view('/includes/header');
			$this->load->view('bakeware', $data);
			$this->load->view('/includes/footer');			
		}
		function interviews($chef = '') {
			$this->load->model('chefs_model');
			
			if ($chef) {
				$chef = str_replace('-',' ', $chef);
				$data['records'] = $this->chefs_model->getChef($chef);
				$this->load->view('/includes/header');
				$this->load->view('interview_page', $data);
				$this->load->view('/includes/footer');	
			} else {
				$data['records'] = $this->chefs_model->getAll();
				$this->load->view('/includes/header');
				$this->load->view('interviews', $data);
				$this->load->view('/includes/footer');	
			}
					
		}
		function recipes($recipe_var = '') {
			$this->load->model('food_model');
			
			if ($recipe_var) {
				$recipe_var = str_replace('-',' ', $recipe_var);
				$data['records'] = $this->food_model->getRecipe($recipe_var);
				$this->load->view('/includes/header');
				$this->load->view('recipe_page', $data);
				$this->load->view('/includes/footer');	
			} else {
				$data['records'] = $this->food_model->getAll();
				$this->load->view('/includes/header');
				$this->load->view('recipes', $data);
				$this->load->view('/includes/footer');
			}			
		}
			function random_interview() {
				$this->load->model('chefs_model');
				$featured = $this->chefs_model->getAllChefsArray();
				$rand = array_rand($featured, 1);
				$chef = str_replace(' ','-',$featured[$rand]['name']);
				$url = "interviews/$chef";
				redirect($url);	
		}
		function checkout() {
			$this->load->view('/includes/header');
			$this->load->view('checkout');
			$this->load->view('/includes/footer');			
		}
	}