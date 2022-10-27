<?php
class CarModel extends CI_Model{


	function GetSahmeaCar(){
    $this->db->where('naweat_tawzef',1);
		$this->db->from('car');
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
  function EditCar($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('car',$data);
  }
  function getCarById($id){
    $this->db->where('id',$id);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function getCars(){
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function insertCar($data){
    return $this->db->insert('car',$data);
  }
  function deleteCar($id){
    $this->db->where('id',$id);
    return  $this->db->delete('car');
  }
 
} 
?>
