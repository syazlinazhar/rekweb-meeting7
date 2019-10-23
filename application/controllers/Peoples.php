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
        $config['num_links'] = 5;

        // styling 
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</a></li>';

        $config['attributes'] = array('class' => 'page-link');

        


        
        
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



