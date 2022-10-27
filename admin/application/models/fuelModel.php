<?php
class FuelModel extends CI_Model{


	function GetSahmeaCar()
  {
    $this->db->where('naweat_tawzef',1);
		$this->db->from('car');
    return $this->db->get()->result();
	}
  function getCar()
  {
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function EditFuel($id,$data)
  {
    $this->db->where('id',$id);
    return $this->db->update('fuel',$data);
  }
  function getFuelById($id)
  {
    $this->db->where('id',$id);
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function GetKhedmateCar()
  {
    $this->db->where('naweat_tawzef',0);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function getFuelId($id)
  {
    $this->db->where('id',$id);
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function sahmeaDetail($id)
  {
    $this->db->where('id',$id);
    $this->db->from('car');
    return $this->db->get()->result();
  }
  function getFuel()
  {
    $this->db->from('fuel');
    return $this->db->get()->result();
  }
  function insertFuel($data)
  {
    return $this->db->insert('fuel',$data);
  }
  function deleteCar($id)
  {
    $this->db->where('id',$id);
    return  $this->db->delete('car');
  }
 
} 
?>
