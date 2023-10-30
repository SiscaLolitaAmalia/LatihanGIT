<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('input_siswa');
    }

    public function proses_input()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
        ];

        // Di sini Anda dapat menyimpan data siswa ke dalam database atau melakukan pengolahan lainnya.

        $this->load->view('hasil_siswa', $data);
    }
}
