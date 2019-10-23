<?php

class Peoples extends CI_Controller { 
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Mahasiswa_model');
    //     $this->load->library('form_validation');
    // }

    public function index()
    {

        $data['title'] = 'List of Peoples';
        
        $this->load->model('Peoples_model', 'peoples');

        // PAGINATION
        $this->load->library('pagination');
 
        // config
        $config['base_url'] = 'http://localhost/rekweb/meeting5/peoples/index'; 
        $config['total_rows'] = $this->peoples->countAllPeoples();
        $config['per_page'] = 12; 

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);
        
        // if( $this->input->post('keyword') ) {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->findDataMahasiswa();
        // }

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }

    // public function add()
    // {
    //     $data['title'] = 'Form Add Data';

    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('matric', 'Matric', 'required|numeric');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //     if( $this->form_validation->run() == FALSE ) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('mahasiswa/add');
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Mahasiswa_model->addDataMahasiswa();
    //         $this->session->set_flashdata('flash', 'Added');
    //         redirect('mahasiswa');
    //     }

    // }

    // public function delete($id)
    // {
    //     $this->Mahasiswa_model->deleteDataMahasiswa($id);
    //     $this->session->set_flashdata('flash', 'Deleted');
    //     redirect('mahasiswa');
    // }

    // public function details($id)
    // {
    //     $data['title'] = 'Details Mahasiswa';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('mahasiswa/details', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function edit($id)
    // {
    //     $data['title'] = 'Form Edit Data';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    //     $data['course'] = ['Information Technology', 'Science Economy', 'Human Resource', 'Accountancy', 'Communication'];

    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('matric', 'Matric', 'required|numeric');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //     if( $this->form_validation->run() == FALSE ) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('mahasiswa/edit', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Mahasiswa_model->editDataMahasiswa();
    //         $this->session->set_flashdata('flash', 'Edited');
    //         redirect('mahasiswa');
    //     }

    // }

}



