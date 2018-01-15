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

    public function insert()
    {
        $nama = "file_".time();
        //upload file
        $config['file_name'] = $nama;
        $config['upload_path'] = 'assets/upload/';
        $config['allowed_types'] = ['jpg','png','jpeg'];
        // $config['max_filename'] = '255';
        // $config['encrypt_name'] = TRUE;

        $config['max_size'] = '3024'; //1 MB
        

        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                // echo 'Error during file upload' . $_FILES['file']['error'];
                $nama = 'sample.png';
            } else {
                if (file_exists('assets/' . $_FILES['file']['name'])) {
                    // echo 'File already exists : assets/' . $_FILES['file']['name'];
                    $nama = 'sample.png';
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        // echo $this->upload->display_errors();
                        $nama = 'sample.png';
                    } else {
                            $a = $this->upload->data();
                            $nama = $a['file_name'];
                    }
                }
            }
        } else {
            // echo 'Please choose a file';
            $nama = 'sample.png';
        }
        $data = array(
            'nl_siswa' => $this->input->post('name'),
            'np_siswa' => $this->input->post('surname'),
            'jk_siswa' => $this->input->post('kelamin'),
            'ttl' => $this->input->post('ttl'),
            'agama_siswa' => $this->input->post('agama'),
            'asal_sekolah' => $this->input->post('sekolah'),
            'ijazah' => $this->input->post('ijazah'),
            'nisn' => $this->input->post('nisn'),
            'nik' => $this->input->post('nik'),
            'tahun' => date('Y'),
            'skhun' => $this->input->post('skhun'),
            'warga_siswa' => $this->input->post('kewarganegaraan'),
            'anak_ke' => $this->input->post('anak_ke'),
            'sdr_knd' => $this->input->post('kandung'),
            'sdr_tir' => $this->input->post('tiri'),
            'sdr_ang' => $this->input->post('angkat'),
            'bahasa' => $this->input->post('bahasa'),
            'berat' => $this->input->post('berat'),
            'tinggi' => $this->input->post('tinggi'),
            'gol_dar' => $this->input->post('goldar'),
            'penyakit' => $this->input->post('penyakit'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('kodepos'),
            'hp_siswa' => $this->input->post('handphone'),
            'tinggal' => $this->input->post('tinggal'),
            'photo' => $nama
            );
        $insert = $this->db->insert('calon_siswa', $data );
        // $ids = $this->db->select('id_siswa')->from('calon_siswa')->where($data)->get()->row()->id_siswa;
        $id = $this->db->insert_id();
        $ayah = array(
            'id_siswa' => $id,
            'nl_ayah' => $this->input->post('namaayah'),
            'ttl_ayah' => $this->input->post('ttlayah'),
            'agama_ayah' => $this->input->post('agamaayah'),
            'warga_ayah' => $this->input->post('kewarganegaraanayah'),
            'pend_ayah' => $this->input->post('pendidikanayah'),
            'kerja_ayah' => $this->input->post('pekerjaanayah'),
            'gaji_ayah' => $this->input->post('penghasilanayah'),
            'rumah_ayah' => $this->input->post('alamatrumah'),
            'kantor_ayah' => $this->input->post('alamatkantorayah'),
            'organisasi_ayah' => $this->input->post('organisasiayah')
            );
        $this->db->insert('ayah_siswa', $ayah);

        $ibu = array(
            'id_siswa' => $id,
            'nl_ibu' => $this->input->post('namaibu'),
            'ttl_ibu' => $this->input->post('ttlibu'),
            'agama_ibu' => $this->input->post('agamaibu'),
            'warga_ibu' => $this->input->post('kewarganegaraanibu'),
            'pend_ibu' => $this->input->post('pendidikanibu'),
            'kerja_ibu' => $this->input->post('pekerjaanibu'),
            'gaji_ibu' => $this->input->post('penghasilanibu'),
            'rumah_ibu' => $this->input->post('alamatrumahibu'),
            'kantor_ibu' => $this->input->post('alamatkantoribu'),
            'organisasi_ibu' => $this->input->post('organisasiibu')
            );
        $this->db->insert('ibu_siswa', $ibu);

        $wali = array(
            'id_siswa' => $id,
            'nl_wali' => $this->input->post('namawali'),
            'ttl_wali' => $this->input->post('ttlwali'),
            'agama_wali' => $this->input->post('agamawali'),
            'warga_wali' => $this->input->post('kewarganegaraanwali'),
            'pend_wali' => $this->input->post('pendidikanwali'),
            'kerja_wali' => $this->input->post('pekerjaanwali'),
            'gaji_wali' => $this->input->post('penghasilanwali'),
            'rumah_wali' => $this->input->post('alamatrumahwali'),
            'kantor_wali' => $this->input->post('alamatkantorwali'),
            'organisasi_wali' => $this->input->post('organisasiwali')
            );
            $this->db->insert('wali_siswa', $wali);

        $mampu = array(
            'id_siswa' => $id, 
            'sholat' => $this->input->post('sholat'), 
            'hafalan' => $this->input->post('surat'), 
            'bacaan' => $this->input->post('quran'), 
            'hobi' => $this->input->post('hobi'), 
            'prestasi' => $this->input->post('prestasi'), 
            'sifat' => $this->input->post('sifat'), 
            'penyakit_keras' => $this->input->post('penyakitkeras')
            );

            $this->db->insert('kemampuan_siswa', $mampu);

        $surat = array(
            'id_siswa' => $id,
            'nama_ortu' => $this->input->post('namapernyataan'), 
            'alamat' => $this->input->post('alamatpernyataan'), 
            'handphone' => $this->input->post('teleponpernyataan'), 
            'ortu_dari' => $this->input->post('ortupernyataan') 
            );
        $this->db->insert('surat', $surat);

        header('Location: '.site_url('cetak'));

    }
    public function cetak()
    {
        if (!empty($this->uri->segment(2))) {
            $id = $this->uri->segment(2);
            $siswa = $this->Adm_model->siswa($id);
            $ayah = $this->Adm_model->ayah($id);
            $ibu = $this->Adm_model->ibu($id);
            $wali = $this->Adm_model->wali($id);
            $surat = $this->Adm_model->surat($id);
            $kemampuan = $this->Adm_model->kemampuan($id);
            // $this->compileView('newui/pdf', $data);
            $this->getPdf($siswa,$ayah,$ibu,$wali,$surat,$kemampuan);
        }else {
            $data['all'] = $this->Adm_model->all();
            $this->compileView('newui/cetak', $data);
        }
    }

    function getPdf($siswa,$ayah,$ibu,$wali,$surat,$kemampuan)
    {
        $this->load->library('Pdf');
        $pdf = new PDF('P','mm','A4');
        $pdf->AliasNbPages();
        //Add Form Siswa
        $pdf->AddPage();
        // Set font
        $pdf->title('Bissmillahirrahmanirrahim');
        $pdf->title('FORMULIR PENDAFTARAN SANTRI BARU');
        $pdf->title('TAHUN PELAJARAN 2018/2019');
        $pdf->ln(15);
        //standard form
        $pdf->standard(1,'Nama Lengkap', $siswa[0]['nl_siswa']);
        $pdf->standard(2,'Nama Panggilan', $siswa[0]['np_siswa']);
        $pdf->standard(3,'Jenis Kelamin', $siswa[0]['jk_siswa']);
        $pdf->standard(4,'Tempat Tanggal Lahir', $siswa[0]['ttl']);
        $pdf->standard(5,'Agama', $siswa[0]['agama_siswa']);
        $pdf->standard(6,'Asal Sekolah', $siswa[0]['asal_sekolah']);
        //subForm
        $pdf->subForm('a','No Ijazah SD', $siswa[0]['ijazah']);
        $pdf->subForm('b','NISN', $siswa[0]['nisn']);
        $pdf->subForm('c','NIK', $siswa[0]['nik']);
        $pdf->subForm('d','SKHUN', $siswa[0]['skhun']);
        $pdf->standard(7,'Kewarganegaraan', $siswa[0]['warga_siswa']);
        $pdf->standard(8,'Anak Ke', $siswa[0]['anak_ke']);
        $pdf->standard(9,'Jumlah Saudara', '');
        $pdf->subForm('a','Saudara Kandung', $siswa[0]['sdr_knd']);
        $pdf->subForm('b','Saudara Tiri', $siswa[0]['sdr_tir']);
        $pdf->subForm('c','Saudara Angkat', $siswa[0]['sdr_ang']);
        $pdf->standard(10,'Kondisi Fisik', '');
        $pdf->subForm('a','Berat Badan(Kg)', $siswa[0]['berat']);
        $pdf->subForm('b','Tinggi Badan(Cm)', $siswa[0]['tinggi']);
        $pdf->subForm('c','Golongan Darah', $siswa[0]['gol_dar']);
        $pdf->subForm('d','Penyakit yang pernah diderita', $siswa[0]['penyakit']);
        $pdf->standard(12,'Alamat Lengkap', $siswa[0]['alamat'].'. '.$siswa[0]['kode_pos']);
        $pdf->standard(13,'No tlp/HP', $siswa[0]['hp_siswa']);
        $pdf->standard(14,'Bertempat tinggal pada', $siswa[0]['tinggal']);

        //add form orangtua
        $pdf->AddPage();
        $pdf->title('DATA ORANG TUA');
        //data ayah
        $pdf->subtitle('A. AYAH');
        $pdf->standard(1,'Nama Lengkap', $ayah[0]['nl_ayah']);
        $pdf->standard(2,'Tempat Tanggal Lahir', $ayah[0]['ttl_ayah']);
        $pdf->standard(3,'Agama', $ayah[0]['agama_ayah']);
        $pdf->standard(4,'Kewarganegaraan', $ayah[0]['warga_ayah']);
        $pdf->standard(5,'Pendidikan Terakhir', $ayah[0]['pend_ayah']);
        $pdf->standard(6,'Pekerjaan', $ayah[0]['kerja_ayah']);
        $pdf->standard(7,'Penghasilan', $ayah[0]['gaji_ayah']);
        $pdf->standard(8,'Alamat Rumah', $ayah[0]['rumah_ayah']);
        $pdf->standard(9,'Alamat Kantor', $ayah[0]['kantor_ayah']);
        $pdf->standard(10,'Pengalaman Organisasi', $ayah[0]['organisasi_ayah']);
        //data ibu
        $pdf->subtitle('B. IBU');
        $pdf->standard(1,'Nama Lengkap', $ibu[0]['nl_ibu']);
        $pdf->standard(2,'Tempat Tanggal Lahir', $ibu[0]['ttl_ibu']);
        $pdf->standard(3,'Agama', $ibu[0]['agama_ibu']);
        $pdf->standard(4,'Kewarganegaraan', $ibu[0]['warga_ibu']);
        $pdf->standard(5,'Pendidikan Terakhir', $ibu[0]['pend_ibu']);
        $pdf->standard(6,'Pekerjaan', $ibu[0]['kerja_ibu']);
        $pdf->standard(7,'Penghasilan', $ibu[0]['gaji_ibu']);
        $pdf->standard(8,'Alamat Rumah', $ibu[0]['rumah_ibu']);
        $pdf->standard(9,'Alamat Kantor', $ibu[0]['kantor_ibu']);
        $pdf->standard(10,'Pengalaman Organisasi', $ibu[0]['organisasi_ibu']);
        //data wali
        $pdf->subtitle('C. WALI');
        $pdf->standard(1,'Nama Lengkap', $wali[0]['nl_wali']);
        $pdf->standard(2,'Tempat Tanggal Lahir', $wali[0]['ttl_wali']);
        $pdf->standard(3,'Agama', $wali[0]['agama_wali']);
        $pdf->standard(4,'Kewarganegaraan', $wali[0]['warga_wali']);
        $pdf->standard(5,'Pendidikan Terakhir', $wali[0]['pend_wali']);
        $pdf->standard(6,'Pekerjaan', $wali[0]['kerja_wali']);
        $pdf->standard(7,'Penghasilan', $wali[0]['gaji_wali']);
        $pdf->standard(8,'Alamat Rumah', $wali[0]['rumah_wali']);
        $pdf->standard(9,'Alamat Kantor', $wali[0]['kantor_wali']);
        $pdf->standard(10,'Pengalaman Organisasi', $wali[0]['organisasi_wali']);

        //add form kemampuan
        $pdf->AddPage();
        $pdf->title('DATA KEMAMPUAN DAN KESEHATAN');
        //data ayah
        $pdf->standard(1,'Pelaksanaan Sholat Lima Waktu', $kemampuan[0]['sholat']);
        $pdf->standard(2,'Surat yang sudah di Hafal', $kemampuan[0]['hafalan']);
        $pdf->standard(3,'Kemampuan Membaca Al-Quran', $kemampuan[0]['bacaan']);
        $pdf->standard(4,'Hobby/Kesukaan Anak', $kemampuan[0]['hobi']);
        $pdf->standard(5,'Prestasi yang pernah diraih', $kemampuan[0]['prestasi']);
        $pdf->standard(6,'sifat/karakter khusus', $kemampuan[0]['sifat']);
        $pdf->substandard('',' yang perlu di perhatikan', '');
        $pdf->standard(7,'Penyakit keras/kecelakaan', $kemampuan[0]['penyakit_keras']);
        $pdf->substandard('',' yang pernah diderita', '');
        //form pernyataan
        $pdf->AddPage();
        $pdf->title('Bissmillahirrahmanirrahim');
        $pdf->title('SURAT PERNYATAAN PELIMPAHAN PENDIIKAN');
        $pdf->title('DAN KESEDIAAN DANA ORANG TUA/WALI CALON SISWA');
        $pdf->title('TAHUN PELAJARAN 2018/2019');
        $pdf->nonstandard('Nomor Pendaftaran', '     -     -     -');
        $pdf->nonstandard('Nama Orang Tua/Wali', $surat[0]['nama_ortu']);
        $pdf->nonstandard('Alamat', $surat[0]['alamat']);
        $pdf->nonstandard('Telepon/HP', $surat[0]['handphone']);
        $pdf->nonstandard('Orang Tua/Wali calon siswa dari', $surat[0]['ortu_dari']);
        $pdf->ln(2);
        $pdf->nonstandard("Dengan Ikhlas menginfaqan dana pendidikan kepada Pesantren Tahfidzul Qur'an Al Azzam SMPIT Bina Insani :", '');
        $pdf->ln(2);
        $pdf->standard(1,'Paket Pendidikan', 'Rp. 1.700.000');
        $pdf->standard(2,'Bahan Seragam Santri(4 Stel)', 'Rp. 900.000');
        $pdf->standard(3,'Perkap Asrama', 'Rp. 3.000.000');
        $pdf->standard(4,'Wakaf Pembangunan', 'Rp. 4.000.000');
        $pdf->standard(4,'Uang Syariah bulan juli', 'Rp. 975.000');
        $pdf->substandard('',' Jumlah Total', 'Rp. 10.575.000');
        $pdf->ln(5);
        $pdf->subtitle('CATATAN');
        $pdf->ln(10);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(1);
            //margin left right, margin top bottom, text, border, line break
        $pdf->Cell(50,0,'A. Penyelesaian Kesediaan Dana Pendidikan tersebut di atas dengan ketentuan sebagai berikut:',0,1,'L');
        $pdf->ln(5);
        $pdf->nonstandard("Pembayaran Pertama saat daftar ulang menyelesaikan:", '');
        $pdf->substandard('','1. 50% Paket Pendidikan', '');
        $pdf->substandard('','2. 100% Biaya Seragam', '');
        $pdf->substandard('','3. 100% Perkap Asrama', '');
        $pdf->substandard('','4. 50% Wakaf Pembangunan', '');
        $pdf->substandard('','5. 100% Uang Syariah bulan juli', '');
        $pdf->nonstandard("Pelunasan sisa kesediaan Dana Pendidikan paling lambat bulan desember 2018.", '');
        $pdf->ln(10);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(1);
            //margin left right, margin top bottom, text, border, line break
        $pdf->Cell(50,0,'B. Selaku Orang Tua/Wali siswa tersebut dengan sungguh-sungguh dan penuh kesadaran kami menyatakan bahwa:',0,1,'L');
        $pdf->ln(5);
        $pdf->substandard('','1. Menyerahkan sepenuhnya pendiikan calon siswa kepada pihak sekolah.', '');
        $pdf->substandard('','2. Bersedia membimbing dan mengawasi calon siswa tersebut di lingkungan dan masyarakat.', '');
        $pdf->substandard('','3. Apabila terjadi pengunduran diri pada putra/putri kami, maka 50% biaya administrasi yang sudah dibayar kami', '');
        $pdf->substandard('','   infaqan kepada SMPIT BINA INSANI.', '');
        $pdf->nonstandard("Demikian pernyataan ini kami buat, semoga memberikan manfaat yang sebesar besarnya pada pendidikan putra/putri kami", '');
        $pdf->substandard('',"dan mendapatkan ridho Allah Subhanallahu Wa Ta'ala. Amiin.", '');
        $pdf->assign();

        //add form kemampuan
        $pdf->AddPage();
        $pdf->title('KARTU PENDAFTARAN');
        $pdf->nonstandard('Nomor Pendaftaran', '     -     -     -');
        $pdf->nonstandard('Nama Calon Siswa', $siswa[0]['nl_siswa']);
        $pdf->nonstandard('Alamat', $siswa[0]['alamat']);
        $pdf->nonstandard('Telepon/HP', $siswa[0]['hp_siswa']);
        $pdf->nonstandard('Agama', $siswa[0]['agama_siswa']);
        $pdf->ln(80);
        $pdf->substandard('','*) Potong Disini', '');
        $pdf->Line(5,160,200,160);
        $pdf->Image(base_url().'/assets/upload/sample.png',170,95,30);
        $pdf->ln(20);
        $pdf->title('KARTU PENDAFTARAN');
        $pdf->nonstandard('Nomor Pendaftaran', '     -     -     -');
        $pdf->nonstandard('Nama Calon Siswa', $siswa[0]['nl_siswa']);
        $pdf->nonstandard('Alamat', $siswa[0]['alamat']);
        $pdf->nonstandard('Telepon/HP', $siswa[0]['hp_siswa']);
        $pdf->nonstandard('Agama', $siswa[0]['agama_siswa']);
        $pdf->Image(base_url().'/assets/upload/sample.png',170,225,30);
        //END
        $pdf->Output();
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
        $id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('kode');
        $this->db->where('code', $kode);
        $cek = $this->db->get()->result_array();
        $siswa ='';
        if (isset($cek[0]['id_siswa'])) {
            $siswa = $cek[0]['id_siswa'];
        }
        if (!empty($cek) && !empty($siswa)) {
                header('Location: '.site_url('cetak/'.$siswa));
        }elseif (!empty($cek) && empty($siswa)) {
                $this->db->where('code', $kode);
                $this->db->update('kode', ['id_siswa' => $id]);
                header('Location: '.site_url('cetak/'.$id));
        }else{
            echo 'Kode salah. silahkan kembali ke halaman cetak.';
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