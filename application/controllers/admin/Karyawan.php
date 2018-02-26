<?php
class Karyawan extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('datatables');
	}
	public function index(){
		$data['script_id'] = 'karyawan_dt';
		$data['script_id_deleted'] = 'karyawan_deleted_dt';
		
		$data['generated_js'][0] = $this->datatables->generate_script_js(
							$data['script_id'],
							json_encode([['data'=>'ID','orderable'=>false],
										['data'=>'nama'],
										['data'=>'alamat'],
										['data'=>'telp'],
										['data'=>'tanggal_lahir'],
										['data'=>'view']]
										),
							site_url('admin/karyawan/karyawan_json_datatables'));
		
		$data['generated_js'][1] = $this->datatables->generate_script_js(
							$data['script_id_deleted'],
							json_encode([['data'=>'ID','orderable'=>false],
										['data'=>'nama'],
										['data'=>'alamat'],
										['data'=>'telp'],
										['data'=>'tanggal_lahir'],
										['data'=>'view']]
										),
							site_url('admin/karyawan/karyawan_deleted_json_datatables'),2);
							
		
		$data['content'] = 'karyawan/index';
		$this->load->view('admin/layout',$data);
	}
	
	public function karyawan_json_datatables(){
		
        $this->load->model('Karyawan_model');
        header('Content-Type: application/json');
        echo $this->Karyawan_model->json();
	}
	public function karyawan_deleted_json_datatables(){
		
        $this->load->model('Karyawan_model');
        header('Content-Type: application/json');
        echo $this->Karyawan_model->deleted_json();
	}
	public function karyawan_create(){
		$data['content']='karyawan/create';
		$this->load->view('admin/layout',$data);
	}
	public function karyawan_update(){
		$data['content']='karyawan/update';
		$this->load->view('admin/layout',$data);
	}
	public function karyawan_delete(){

	}
	public function karyawan_delete_permanently(){

	}
}