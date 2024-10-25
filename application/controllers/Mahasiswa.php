<?php

class Mahasiswa extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('form_validation');
  }
  
  public function index()
  {
    $data['judul'] = 'Page Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
    if( $this->input->post('keyword') ) {
      $data['mahasiswa'] = $this->Mahasiswa_model->searchDataMahasiswa();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer');
  }
  
  public function detail($id)
  {
    $data['judul'] = 'Page Detail Mahahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/detail', $data);
    $this->load->view('templates/footer');
  }
  
  public function create()
  {
    $data['judul'] = 'Form Create Data Mahasiswa';
    
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
    if($this->form_validation->run() == FALSE) {
      
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/create');
    $this->load->view('templates/footer');
      
    } else {
      $this->Mahasiswa_model->createDataMahasiswa();
      $this->session->set_flashdata('flash', 'DiTambahkan');
      redirect('mahasiswa');
    }
  }
  
  public function delete($id)
  {
    $this->Mahasiswa_model->deleteDataMahasiswa($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('mahasiswa');
  }
  
  public function edit($id)
  {
    $data['judul'] = 'Form Edit Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    $data['jurusan'] = [
      'Teknik Informatika',
      'Teknik Kuli Jawa',
      'Teknik Pangan',
      'Teknik Industri',
      'Teknik Kue',
      'Teknik Pengangguran'
      ];

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
    if($this->form_validation->run() == FALSE) {
      
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/edit', $data);
    $this->load->view('templates/footer');
      
    } else {
      $this->Mahasiswa_model->editDataMahasiswa();
      $this->session->set_flashdata('flash', 'DiEdit');
      redirect('mahasiswa');
    }
  }
  
}