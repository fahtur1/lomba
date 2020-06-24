<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function home($uri = 'dashboard')
	{
		switch ($uri) {

			case 'dashboard':

				$this->load->view('templates/sidebar');
				$this->load->view('templates/header');
				$this->load->view('admin/dashboard');
				$this->load->view('templates/footer');

				break;

			case 'createplan':
				if ($this->input->post()) {
					$id =  explode('=', base64_encode(date("Y-d-m s:H:i")))[0];
					$dateSplit = explode('-', $this->input->post('date'));
					$date = $dateSplit[2] . '/' . $dateSplit[1] . '/' . $dateSplit[0];

					$data = [
						'product_id' => $id,
						'product_model' => $this->input->post('unit_model'),
						'product_code' => $this->input->post('unit_code'),
						'product_plandate' => $date,
						'product_type' => $this->input->post('ps_type'),
						'product_remark' => $this->input->post('remark')
					];

					$this->Product_model->insertProduct($data);
					redirect('admin/home/planps');
				} else {
					$this->load->view('templates/sidebar');
					$this->load->view('templates/header');
					$this->load->view('admin/create_plan');
					$this->load->view('templates/footer');
				}
				break;

			case 'planps':

				$data = [
					'products' => $this->Product_model->getProducts()
				];

				$this->load->view('templates/sidebar');
				$this->load->view('templates/header');
				$this->load->view('admin/plan_ps', $data);
				$this->load->view('templates/footer');

				break;

			case 'actualps':

				$this->load->view('templates/sidebar');
				$this->load->view('templates/header');
				$this->load->view('admin/actual_ps');
				$this->load->view('templates/footer');

				break;
		}
	}
}
