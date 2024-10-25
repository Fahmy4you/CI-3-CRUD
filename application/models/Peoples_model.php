<?php

class Peoples_model extends CI_Model 
{
  
  public function getAllPeoples()
  {
    return $this->db->get('peoples3')->result_array();
  }
  
  public function getPeoples($limit, $start, $keyword = null)
  {
    if( $keyword ) {
      $this->db->like('name', $keyword);
      $this->db->or_like('email', $keyword);
    }
    return $this->db->get('peoples3', $limit, $start)->result_array();
  }
  
  public function countAllPeoples()
  {
    return $this->db->get('peoples3')->num_rows();
  }
  
  public function getPeoplesById($id)
  {
    return $this->db->get_where('peoples3', ['id' => $id])->row_array();
  }
  
  public function createDataPeoples()
  {
    $data = [
      "name" => $this->input->post('name', true),
      "email" => $this->input->post('email', true),
      "address" => $this->input->post('address', true)
    ];
    
    $this->db->insert('peoples3', $data); 
  }
  
  public function deleteDataPeoples($id)
  {
    $this->db->delete('peoples3', ['id' => $id]);
  }
  
  public function editDataPeoples()
  {
    $data = [
      "name" => $this->input->post('name', true),
      "email" => $this->input->post('email', true),
      "address" => $this->input->post('address', true)
    ];
    
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('peoples3', $data);
  }

}