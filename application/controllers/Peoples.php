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

        // load library
        $this->load->library('pagination');
 
        // take data keyword
        if($this->input->post('submit')) { 
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 8; 

        
        
        // initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
        
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



