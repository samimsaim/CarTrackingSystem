<?php
class ProvinceModel extends CI_Model{


	
  function getProvince(){
    $this->db->from('province');
    return $this->db->get()->result();
  }
 function addProvince(){
    $type=$this->input->post('action');
    $data=array(
      'name'=>$this->input->post('name'),
      'insertDate'=>date('Y-m-d'),
      );
    return $this->db->insert('province',$data);
  }
  function updateProvince($id,$data){
    $this->db->where('id',$id);
   return $this->db->update('province',$data); 
  }
  function deleteProvince($id){
    $this->db->where('id',$id);
    return  $this->db->delete('province');
  }
  function getDestrict(){
    $this->db->from('destrict');
    return $this->db->get()->result();
  }
  function addDestrict(){
    $type=$this->input->post('action');
    $data=array(
      'name'=>$this->input->post('name'),
      'pro_id'=>$this->input->post('province'),
      'insertDate'=>date('Y-m-d'),
      );
    return $this->db->insert('destrict',$data);
  }
   function updateDestrict($id,$data){
    $this->db->where('id',$id);
   return $this->db->update('destrict',$data); 
  }
  function deleteDestrict($id){
    $this->db->where('id',$id);
    return  $this->db->delete('destrict');
  }
 
} 
?>
