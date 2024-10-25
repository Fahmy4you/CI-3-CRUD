<?php

class Peoples extends CI_Controller {
  
  public function index()
  {
    $data['judul'] = 'Page Peoples';
    $this->load->model('Peoples_model', 'peoples');
    
    // Load Library
    $this->load->library('pagination');
    
    // Ambil Data Keyword
    if( $this->input->post('submit') ) {
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }
    
    // Config
    $this->db->like('name', $data['keyword']);
    $this->db->or_like('email', $data['keyword']);
    $this->db->from('peoples3');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 10;
   
    // Initialize
    $this->pagination->initialize($config);
    
    $data['start'] = $this->uri->segment(3);
    $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
    
    $this->load->view('templates/header', $data);
    $this->load->view('peoples/index', $data);
    $this->load->view('templates/footer');
  }
  
  public function detail($id)
  {
    $this->load->model('Peoples_model', 'peoples');
    $data['judul'] = 'Page Detail Peoples';
    $data['peoples'] = $this->peoples->getPeoplesById($id);
    
    $this->load->view('templates/header', $data);
    $this->load->view('peoples/detail', $data);
    $this->load->view('templates/footer');
  }
  
  public function create()
  {
    $this->load->library('form_validation');
    $this->load->model('Peoples_model', 'peoples');
    $data['judul'] = 'Form Create Data Peoples';
    
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('address', 'Address', 'required');
    
    if($this->form_validation->run() == FALSE) {
      
    $this->load->view('templates/header', $data);
    $this->load->view('peoples/create');
    $this->load->view('templates/footer');
      
    } else {
      $this->peoples->createDataPeoples();
      $this->session->set_flashdata('flash', 'DiTambahkan');
      redirect('peoples');
    }
  
  }
  
  public function delete($id)
  {
    $this->load->library('form_validation');
    $this->load->model('Peoples_model', 'peoples');
    $this->peoples->deleteDataPeoples($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('peoples');
  }
  
  public function edit($id)
  {
    $this->load->library('form_validation');
    $this->load->model('Peoples_model', 'peoples');
    $data['judul'] = 'Form Create Data Peoples';
    $data['people'] = $this->peoples->getPeoplesById($id);
    
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('address', 'Address', 'required');
    
    if($this->form_validation->run() == FALSE) {
      
    $this->load->view('templates/header', $data);
    $this->load->view('peoples/edit');
    $this->load->view('templates/footer');
      
    } else {
      $this->peoples->editDataPeoples();
      $this->session->set_flashdata('flash', 'DiEdit');
      redirect('peoples');
    }
  }
  
}