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
        $data['title'] = 'Register Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Form Add Data';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('matric', 'Matric', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/add');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->addDataMahasiswa();
            $this->session->set_flashdata('flash', 'Added');
            redirect('mahasiswa');
        }

    }

    public function delete($id)
    {
        $this->Mahasiswa_model->deleteDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('mahasiswa');
    }
}



