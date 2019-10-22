<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
        {
            return $this->db->get('mahasiswa')->result_array();
        }

        public function addDataMahasiswa()
        {
            $data = [
                "name" => $this->input->post('name', true),
                "matric" => $this->input->post('matric', true),
                "email" => $this->input->post('email', true),
                "course" => $this->input->post('course', true),
            ];

            $this->db->insert('mahasiswa', $data);
        }

        public function deleteDataMahasiswa($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa', ['id' => $id]);
        }

        public function getMahasiswaById($id)
        {
            return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        }

        public function editDataMahasiswa()
        {
            $data = [
                "name" => $this->input->post('name', true),
                "matric" => $this->input->post('matric', true),
                "email" => $this->input->post('email', true),
                "course" => $this->input->post('course', true),
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }

        public function findDataMahasiswa()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('name', $keyword);
            $this->db->or_like('matric', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('course', $keyword);
            return $this->db->get('mahasiswa')->result_array();
        }
}