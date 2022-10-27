<?php
class PurzajatModel extends CI_Model{


	function getPurzajat(){
		$this->db->from('purzajat');
    return $this->db->get()->result();
	}
  function GetKhedmateCar(){
    $this->db->where('naweat_tawzef',0);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function sahmeaDetail($id){
    $this->db->where('id',$id);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function updatePurza($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('purzajat',$data);
  }
  function getPurzaById($id){
    $this->db->where('id',$id);
    $this->db->from('purzajat');
    return $this->db->get()->result();
  }
  function getPurzaByIds($id){
    $this->db->where('car_id',$id);
    $this->db->from('purzajat');
    return $this->db->get()->result();
  }
  function getCars(){
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function insertPurza($data){
    return $this->db->insert('purzajat',$data);
  }
  function DeletePurza($id){
    $this->db->where('id',$id);
    return  $this->db->delete('purzajat');
  }
 
} 
?>
