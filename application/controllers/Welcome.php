<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function pass($p){
		$r = $this->bcrypt->hash($p);
		echo $r;
	}
	public function compare(){
		$r = $this->bcrypt->verify('asu','$2y$08$AwctnDUkN0WJ/0g1Jma35.QhoAPUum9PwVB3Nf0JleMl7nc.MNBIu');
		echo $r;
	}
	public function test_bc(){
		$this->load->library('breadcrumbs');
		$this->breadcrumbs->push("Dashboard",site_url('dashboard/index'),FALSE,array('title'=>"Klik disini",'alt'=>'fucking'));
		$this->breadcrumbs->push("<i class='fa fa-star'></i> Bintang",site_url('dashboard/index'),TRUE);
		echo $this->breadcrumbs->build();
	}
}
