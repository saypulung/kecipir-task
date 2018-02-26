<?php

class Karyawan_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    function json() {
        $this->datatables->select('ID,nama,alamat,telp,tanggal_lahir');
        $this->datatables->from('master_playground');
        $this->datatables->where('is_deleted','0');
        $this->datatables->add_column('view', '<a href="'.site_url('admin/karyawan/karyawan_update/').'$1">edit</a> | <a href="'.site_url('admin/karyawan/karyawan_delete/').'$1">trash</a>', 'ID');
        return $this->datatables->generate();
    }
    function deleted_json() {
        $this->datatables->select('ID,nama,alamat,telp,tanggal_lahir');
        $this->datatables->from('master_playground');
        $this->datatables->where('is_deleted','1');
        $this->datatables->add_column('view', '<a href="'.site_url('admin/karyawan/karyawan_undelete/').'$1">undelete</a> | <a href="'.site_url('admin/karyawan/karyawan_delete_permanently/').'$1">delete</a>', 'ID');
        return $this->datatables->generate();
    }
    function undelete_karyawan($id){
        $this->db->where('id',$id);
        return $this->db->update('master_playground',['is_deleted'=>0]);
    }
    function delete_karyawan($id){
        $this->db->where('id',$id);
        return $this->db->update('master_playground',['is_deleted'=>1]);
    }
    function create_karyawan($data){
        return $this->db->insert('master_playground',$data);
    }
    function update_karyawan($data,$id){
        $this->db->where('id',$id);
        return $this->db->update('master_playground',$data);
    }
}

?>