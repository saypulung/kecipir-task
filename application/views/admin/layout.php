<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->view('admin/header');
$this->load->view('admin/'.(isset($content) ? $content : 'home') );
$this->load->view('admin/footer');