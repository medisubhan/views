<?php 
class Submit_data_model extends CI_Model{

	public function __construct(){
        parent::__construct();
    }

	function insertBadanUsaha($data){	
		  $this->db->insert('data_badan_usaha', $data);
	}

	function get_all_badan_usaha(){
		$query = $this->db->get('data_badan_usaha');
		return $query->result();
	}

	function getById($id_reg){
		$this->db->where('id', $id_reg);
		$query = $this->db->get('data_badan_usaha');
		return $query->result();
	}

	function getByIdRegister($id_reg){
		$this->db->where('id', $id_reg);
		$query = $this->db->get('register');
		return $query->result();
	}

	function joinUsahaRegister($id_reg){
		 $query = $this->db->query('select A.id, B.nama_badan_usaha,A.alamat,A.kabupaten_kota,A.kode_pos,A.telephone,A.fax,B.email,A.website,A.npwp from data_badan_usaha as A join register as B on A.email = B.email where A.id_reg=$id_reg AND B.id=$id_reg');
		 return $query->result();

		 //print_r($query);

	}

}



            
              
             
        
        
        

 
  

        
