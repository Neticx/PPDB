<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Adm_model');
    }

    function index() {
        $this->load->view('form', NULL);
    }
    public function newForm($value='')
    {
        $this->compileView('newui/formulir');
    }

    private function compileView($form, $data = '')
    {
        $this->load->view('newui/header');
        $this->load->view($form,$data);
        $this->load->view('newui/footer');
    }
    public function cek()
    {
        $tex = $this->input->post('text');
        $sub = substr($tex,1,-1);
        echo json_encode($sub);
    }

    function upload_file() {
        $nama = "file_".time();
        //upload file
        $config['file_name'] = $nama;
        $config['upload_path'] = 'assets/upload/';
        $config['allowed_types'] = '*';
        // $config['max_filename'] = '255';
        // $config['encrypt_name'] = TRUE;
        $config['max_size'] = '3024'; //1 MB
        

        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists('assets/' . $_FILES['file']['name'])) {
                    echo 'File already exists : assets/' . $_FILES['file']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    } else {
                            $a = $this->upload->data();
                            $b = $a['file_name'];

                        echo json_encode($b);
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }
    }

    public function insert()
    {
        $fotos = $this->input->post('foto');
        $foto = substr($fotos,1,-1);
        // echo json_encode($sub);
        $data = array(
            'nl_siswa' => $this->input->post('nl_siswa'),
            'np_siswa' => $this->input->post('np_siswa'),
            'jk_siswa' => $this->input->post('jk_siswa'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'agama_siswa' => $this->input->post('agama_siswa'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'ijazah' => $this->input->post('ijazah'),
            'nisn' => $this->input->post('nisn'),
            'nik' => $this->input->post('nik'),
            'skhun' => $this->input->post('skhun'),
            'warga_siswa' => $this->input->post('warga_siswa'),
            'anak_ke' => $this->input->post('anak_ke'),
            'sdr_knd' => $this->input->post('sdr_knd'),
            'sdr_tir' => $this->input->post('sdr_tir'),
            'sdr_ang' => $this->input->post('sdr_ang'),
            'bahasa' => $this->input->post('bahasa'),
            'berat' => $this->input->post('berat'),
            'tinggi' => $this->input->post('tinggi'),
            'gol_dar' => $this->input->post('gol_dar'),
            'penyakit' => $this->input->post('penyakit'),
            'alamat' => $this->input->post('alamat_siswa'),
            'kode_pos' => $this->input->post('kode_pos'),
            'hp_siswa' => $this->input->post('hp_siswa'),
            'tinggal' => $this->input->post('tinggal')
            );
        $insert = $this->db->insert('calon_siswa', $data );
        // $ids = $this->db->select('id_siswa')->from('calon_siswa')->where($data)->get()->row()->id_siswa;
        $id = $this->db->insert_id();
        $ayah = array(
            'id_siswa' => $id,
            'nl_ayah' => $this->input->post('nl_ayah'),
            'ttl_ayah' => $this->input->post('ttl_ayah'),
            'agama_ayah' => $this->input->post('agama_ayah'),
            'warga_ayah' => $this->input->post('warga_ayah'),
            'pend_ayah' => $this->input->post('pend_ayah'),
            'kerja_ayah' => $this->input->post('kerja_ayah'),
            'gaji_ayah' => $this->input->post('gaji_ayah'),
            'rumah_ayah' => $this->input->post('rumah_ayah'),
            'kantor_ayah' => $this->input->post('kantor_ayah'),
            'organisasi_ayah' => $this->input->post('organisasi_ayah')
            );
        $this->db->insert('ayah_siswa', $ayah);

        $ibu = array(
            'id_siswa' => $id,
            'nl_ibu' => $this->input->post('nl_ibu'),
            'ttl_ibu' => $this->input->post('ttl_ibu'),
            'agama_ibu' => $this->input->post('agama_ibu'),
            'warga_ibu' => $this->input->post('warga_ibu'),
            'pend_ibu' => $this->input->post('pend_ibu'),
            'kerja_ibu' => $this->input->post('kerja_ibu'),
            'gaji_ibu' => $this->input->post('gaji_ibu'),
            'rumah_ibu' => $this->input->post('rumah_ibu'),
            'kantor_ibu' => $this->input->post('kantor_ibu'),
            'organisasi_ibu' => $this->input->post('organisasi_ibu')
            );
        $this->db->insert('ibu_siswa', $ibu);

        $wali = array(
            'id_siswa' => $id,
            'nl_wali' => $this->input->post('nl_wali'),
            'ttl_wali' => $this->input->post('ttl_wali'),
            'agama_wali' => $this->input->post('agama_wali'),
            'warga_wali' => $this->input->post('warga_wali'),
            'pend_wali' => $this->input->post('pend_wali'),
            'kerja_wali' => $this->input->post('kerja_wali'),
            'gaji_wali' => $this->input->post('gaji_wali'),
            'rumah_wali' => $this->input->post('rumah_wali'),
            'kantor_wali' => $this->input->post('kantor_wali'),
            'organisasi_wali' => $this->input->post('organisasi_wali')
            );
            $this->db->insert('wali_siswa', $wali);

        $kartu = array(
            'id_siswa' => $id, 
            'nama_siswa' => $this->input->post('nama_siswa'), 
            'alamat' => $this->input->post('alamat_kartu'), 
            'handphone' => $this->input->post('handphone_kartu'), 
            'foto' => $foto
            );

            $this->db->insert('kartu', $kartu);

        $mampu = array(
            'id_siswa' => $id, 
            'sholat' => $this->input->post('sholat'), 
            'hafalan' => $this->input->post('hafalan'), 
            'bacaan' => $this->input->post('bacaan'), 
            'hobi' => $this->input->post('hobi'), 
            'prestasi' => $this->input->post('prestasi'), 
            'sifat' => $this->input->post('sifat'), 
            'penyakit_keras' => $this->input->post('penyakit_keras')
            );

            $this->db->insert('kemampuan_siswa', $mampu);

        $surat = array(
            'id_siswa' => $id,
            'nama_ortu' => $this->input->post('nama_ortu'), 
            'alamat' => $this->input->post('alamat_surat'), 
            'handphone' => $this->input->post('handphone_surat'), 
            'ortu_dari' => $this->input->post('ortu_dari') 
            );
        $this->db->insert('surat', $surat);

        echo json_encode($id);

    }

    public function cetak()
    {
        $id = $this->uri->segment(3);
        $data['siswa'] = $this->Adm_model->siswa($id);
        $data['ayah'] = $this->Adm_model->ayah($id);
        $data['ibu'] = $this->Adm_model->ibu($id);
        $data['wali'] = $this->Adm_model->wali($id);
        $data['kartu'] = $this->Adm_model->kartu($id);
        $data['surat'] = $this->Adm_model->surat($id);
        $data['kemampuan'] = $this->Adm_model->kemampuan($id);

        $this->load->view('formulir', $data);
    }

    public function generate()
    {
        $this->db->select('*');
        $this->db->from('calon_siswa');
        $data['siswa'] = $this->db->get()->result();
        $this->load->view('generate', $data);
    }

    public function cek_valid()
    {
        $kode = $this->input->post('kode');
        $this->db->select('*');
        $this->db->from('kode');
        $this->db->where('code', $kode);
        $cek = $this->db->get()->result();
        foreach ($cek as $value) {
            $siswa = $value->id_siswa;
        }
        
        if (count($cek) == 1) {
            if ($siswa !== '') {
                echo json_encode($siswa);
            }else {
                echo json_encode(true);
            }
        }
        else{
            echo json_encode(false);
        }

    }

    public function end_valid()
    {
        $id = $this->input->post('id_siswa');
        $id_siswa = array('id_siswa' => $id );
        $kode = $this->input->post('kode');
        $tgl = $this->input->post('tgl');
        $this->db->select('*');
        $this->db->from('calon_siswa');
        $this->db->where('id_siswa', $id);
        $this->db->where('tgl_lahir', $tgl);
        $cek = $this->db->get()->result();
        if (count($cek) == 1) {
            $this->db->where('code', $kode);
            $this->db->update('kode', $id_siswa);
            echo json_encode(true);
        }
        else{
            echo json_encode(false);
        }
    }


}