<?php
class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('datatables');
	}
	public function index(){
		$data['content'] = 'home';
		//print_r($this->session->userdata());
		$this->load->view('admin/layout',$data);
	}
	public function test_json(){
		$data = array(
			array(
				'data'=>'ID',
				'orderable'=>false
				),
			array(
				'data'=>'anu'
			)
		);
		print_r($data);
		echo 'json';
		echo json_encode($data);
	}
	public function demo_datatables(){
		$data['script_id'] = 'demo_dt';
		$data['generated_js'] = $this->datatables->generate_script_js(
							$data['script_id'],
							json_encode([['data'=>'ID','orderable'=>false],
										['data'=>'namakota'],
										['data'=>'populasi'],
										['data'=>'namanegara'],
										['data'=>'view']]
										),
							base_url('index.php/admin/dashboard/demo_json_datatables'));
		$data['content'] = 'demo/demo_datatables';
		$this->load->view('admin/layout',$data);
	}
	public function demo_json_datatables(){
		
        $this->load->model('World_model');
        header('Content-Type: application/json');
        echo $this->World_model->json();
	}
	public function demo_send_data(){

	}
	public function delete_data(){

	}
	public function update_data(){

	}
}