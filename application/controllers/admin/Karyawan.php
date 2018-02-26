<?php
class Karyawan extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('Karyawan_model');
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
		
        header('Content-Type: application/json');
        echo $this->Karyawan_model->json();
	}
	public function karyawan_deleted_json_datatables(){
		
        
        header('Content-Type: application/json');
        echo $this->Karyawan_model->deleted_json();
	}
	public function karyawan_create(){
		
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('telp', 'Nomor Telepon', 'required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
            if ($this->form_validation->run() == FALSE)
            {
            	$data['message']=$this->form_validation->error_string();
				$data['content']='karyawan/create';
            }
            else
            {
            	$data_karyawan['nama']=$this->input->post('nama',TRUE);
            	$data_karyawan['alamat']=$this->input->post('alamat',TRUE);
            	$data_karyawan['telp']=$this->input->post('telp',TRUE);
            	$data_karyawan['tanggal_lahir']=$this->input->post('tanggal_lahir',TRUE);
            	$this->Karyawan_model->create_karyawan($data_karyawan);
                redirect('admin/karyawan');
            }
			
		}else{
			
			$data['message']='';
			$data['content']='karyawan/create';	
		}
		
		$this->load->view('admin/layout',$data);
	}
	public function karyawan_update($id){
		
		$data['edit']=$this->Karyawan_model->detail_karyawan($id)->row_array();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('telp', 'Nomor Telepon', 'required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
            if ($this->form_validation->run() == FALSE)
            {
            	$data['message']=$this->form_validation->error_string();
				$data['content']='karyawan/update';
            }
            else
            {
            	$data_karyawan['nama']=$this->input->post('nama',TRUE);
            	$data_karyawan['alamat']=$this->input->post('alamat',TRUE);
            	$data_karyawan['telp']=$this->input->post('telp',TRUE);
            	$data_karyawan['tanggal_lahir']=$this->input->post('tanggal_lahir',TRUE);
            	$this->Karyawan_model->update_karyawan($data_karyawan,$id);
                redirect('admin/karyawan');
            }
			
		}else{
			$data['message']='';
			$data['content']='karyawan/update';	
		}
		
		$this->load->view('admin/layout',$data);
	}
	public function karyawan_delete($id){
		$this->Karyawan_model->delete_karyawan($id);
		redirect('admin/karyawan');
	}
	public function karyawan_undelete($id){
		$this->Karyawan_model->undelete_karyawan($id);
		redirect('admin/karyawan');	
	}
	public function karyawan_delete_permanently($id){
		$this->Karyawan_model->delete_permanent_karyawan($id);
		redirect('admin/karyawan');	
	}
}