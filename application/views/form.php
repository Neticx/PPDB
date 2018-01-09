<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Pendaftaran SMPIT Bina Insani </title>
    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
      <!-- <style>
        .pop-up{
        position: absolute;
         /*background: #FFFFFF; */
        width: 100%;
        height: 68px;
        /*bottom: 0px;*/
        visibility: show;
        z-index: 100;
        }

      </style> -->
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
   
    <script src="<?= base_url(); ?>assets/build/js/script.js"></script>
    
  </head>

  <body>
    <div class="container body">

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="text-center">
              <div class="text-center">
              <h3>PENERIMAAN SANTRI BARU</h3>
              <h3>PESANTREN TAHFIDZUL QUR'AN AL'AZZAM</h3>
              <h3>SEKOLAH MENENGAH PERTAMA ISLAM TERPADU</h3>
              <h3 id="homes">BINA INSANI SEMARANG</h3>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
                    <p>Silahkan Lengkapi form 1 sampai 7 untuk menyelesaikan pendaftaran.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">SISWA<br />
                              <small>Biodata Siswa</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">AYAH<br />
                              <small>Biodata Ayah</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">IBU<br />
                              <small>Biodata Ibu</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">WALI<br />
                              <small>Biodata Wali</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">TENTANG SISWA<br />
                              <small>Data Kemampuan & Kesehatan Siswa</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">PERNYATAAN<br />
                              <small>Surat Pernyataan</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-7">
                            <span class="step_no">7</span>
                            <span class="step_descr">Finish<br />
                              <small>Kartu Pendaftaran</small>
                            </span>
                          </a>
                        </li>
                      </ul>
<?php $now=strtotime(date("Y"));
    $skrg = date('Y');
    $date = date('Y', strtotime("1 Year", $now));
 ?>
                      <!-- FORM 1 -->
                      <div id="step-1">
                      <center>
                        <h4>Bissmillahirrahmanirrahiim</h4>
                        <h2>FORMULIR PENDAFTARAN SANTRI BARU</h2>
                        <h2>TAHUN PELAJARAN <?= $skrg."/".$date ?></h2>
                        <img src="<?= base_url(); ?>assets/build/img/1.png" alt="">
                      </center>
                      <form class="form-horizontal form-label-left">

                        <ul><label for="">Nama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nl_siswa">Nama Lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nl_siswa" name="nl_siswa" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh : Muhammad Faiz Akbar">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="np_siswa">Nama Panggilan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="np_siswa" name="np_siswa" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh : Faiz">
                            </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                        <input type="radio" class="flat" name="kelamin_siswa" id="kelamin_siswa" value="Laki-laki" /> Laki-laki &nbsp &nbsp
                        <input type="radio" class="flat" name="kelamin_siswa" id="kelamin_siswa" value="Perempuan" /> Perempuan 
                          </div>
                        </div>
                      </div>
                      <ul><label for="">Kelahiran </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="tempat_siswa" name="tempat_siswa" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Contoh : Semarang">
                            </div>
                          </div>
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Lahir</label>
                        <div class="col-md-6 col-sm-9 col-xs-9">
                          <input id="tanggal_siswa" name="tanggal_siswa" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <ul><label for="">Agama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Agama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="radio" class="flat" name="agama_siswa" id="agama_siswa" value="Islam" /> Islam &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_siswa" id="agama_siswa" value="Kristen" /> Kristen <br>
                              <input type="radio" class="flat" name="agama_siswa" id="agama_siswa" value="Budha" /> Budha &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_siswa" id="agama_siswa" value="Hindu" /> Hindu
                            </div>
                          </div>
                        <ul><label for="">Sekolah </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asal Sekolah <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="asal_sekolah" name="asal_sekolah" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh : SDN 2 Ambarawa">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">No Ijazah</label>
                            <div class="col-md-6 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" data-inputmask="'mask' : '** - ** - ****** - ** - ****'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">NISN</label>
                            <div class="col-md-6 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="nisn" name="nisn" data-inputmask="'mask' : '** - ** - ****'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">NIK</label>
                            <div class="col-md-6 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="nik" name="nik" data-inputmask="'mask' : '** - ** - ****** - ** - ****'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">No SKHUN</label>
                            <div class="col-md-6 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="skhun" name="skhun" data-inputmask="'mask' : '** - ** - ****** - ** - ****'">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <ul><label for="">Kewarganegaraan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="kewargaan_siswa" id="kewargaan_siswa" value="Warga Negara Indonesia(WNI)" checked="" required /> Warga Negara Indonesia(WNI) &nbsp &nbsp
                            <input type="radio" class="flat" name="kewargaan_siswa" id="kewargaan_siswa" value="Warga Negara Asing(WNA)" /> Warga Negara Asing(WNA)
                              </div>
                            </div>
                          </div>

                        <ul><label for="">Jumlah Saudara </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Saudara Kandung <span class="required">*</span>
                            </label>
                            <div class="col-md-1 col-sm-6 col-xs-12">
                              <input type="number" id="saudara_kan" name="saudara_kan" required="required" class="form-control col-md-7 col-xs-12" placeholder="0">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Saudara Tiri <span class="required">*</span>
                            </label>
                            <div class="col-md-1 col-sm-6 col-xs-12">
                              <input type="number" id="saudara_tir" name="saudara_tir" required="required" class="form-control col-md-7 col-xs-12" placeholder="0">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Saudara Angkat <span class="required">*</span>
                            </label>
                            <div class="col-md-1 col-sm-6 col-xs-12">
                              <input type="number"  name="saudara_ang" id="saudara_ang" required="required" class="form-control col-md-7 col-xs-12" placeholder="0">
                            </div>
                          </div>

                           <ul><label for="">Bahasa </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bahasa Sehari-hari <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <input type="text" id="bahasa_siswa" name="bahasa_siswa" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Bahasa Jawa">
                            </div>
                          </div>

                          <ul><label for="">Keadaan Jasmani </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berat Badan <span class="required">*</span>
                            </label>
                            <div class="col-md-1 col-sm-6 col-xs-12">
                              <input type="number" id="berat_siswa" name="berat_siswa" required="required" class="form-control col-md-7 col-xs-12" placeholder="0">
                            </div> Kg.
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tinggi Badan<span class="required">*</span>
                            </label>
                            <div class="col-md-1 col-sm-6 col-xs-12">
                              <input type="number" id="tinggi_siswa" name="tinggi_siswa" required="required" class="form-control col-md-7 col-xs-12" placeholder="0">
                            </div> Cm.
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group tes" data-toggle="buttons">
                                <input type="radio" class="flat" name="goldar_siswa" id="goldar_siswa" value="A"  required /> A &nbsp &nbsp
                                <input type="radio" class="flat" name="goldar_siswa" id="goldar_siswa" value="B" /> B &nbsp &nbsp
                                <input type="radio" class="flat" name="goldar_siswa" id="goldar_siswa"  value="AB" /> AB &nbsp &nbsp
                                <input type="radio" class="flat" name="goldar_siswa" id="goldar_siswa"  value="O" /> O
                              </div>
                            </div>
                          </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit yang pernah diderita </label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <input id="penyakit_siswa" name="penyakit_siswa" type="text" class="tags form-control" value="Maag" />
                        </div>
                      </div>

                       <ul><label for="">Alamat </label></ul>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Alamat Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <textarea name="alamat_siswa" id="alamat_siswa" cols="1" rows="2" placeholder="Alamat Lengkap"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Pos <span class="required">*</span>
                        </label>
                        <div class="col-md-1 col-sm-6 col-xs-12">
                          <input type="number" id="kode_pos" name="kode_pos" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh : 15620">
                        </div>
                      </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Telepon/Handphone</label>
                            <div class="col-md-3 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="nohp_siswa" name="nohp_siswa" data-inputmask="'mask' : '**** - **** - ****'">
                              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bertempat tinggal pada</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                                <input type="radio" class="flat" name="tinggal_siswa" id="tinggal_siswa" value="Orang Tua" required /> Orang Tua &nbsp &nbsp
                                <input type="radio" class="flat" name="tinggal_siswa" id="tinggal_siswa" value="Menumpang" /> Menumpang &nbsp &nbsp
                                <input type="radio" class="flat" name="tinggal_siswa" id="tinggal_siswa" value="Asrama" /> Asrama 
                              </div>
                            </div>
                          </div>

                        </form>

                      </div>
                      <!-- END FORM 1 -->

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title text-center">Pendaftaran Sedang diproses</h2>
                          </div>
                          <div class="modal-body text-center">
                            <h4>Mohon Tunggu</h4>
                            <p>Pendaftaran Sedang di proses, Dalam 5 detik anda akan dibawa ke halaman status</p>
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>

                      </div>
                    </div>
                      <!-- FORM 2 -->
                      <div id="step-2">
                       <form class="form-horizontal form-label-left">
                       <h3>A. ORANG TUA/WALI</h3>
                       <ul><h2>*. AYAH KANDUNG</h2></ul>
                          <ul><label for="">Nama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nl_ayah" name="nl_ayah" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Badrussalam S.Pd">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat / Tanggal Lahir <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="ttl_ayah" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Semarang, 12 Desember 1970">
                            </div>
                          </div>

                          
                      <ul><label for="">Agama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Agama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="radio" class="flat" name="agama_ayah" id="agama_ayah" value="Islam" /> Islam &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_ayah" id="agama_ayah" value="Kristen" /> Kristen <br>
                              <input type="radio" class="flat" name="agama_ayah" id="agama_ayah" value="Budha" /> Budha &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_ayah" id="agama_ayah" value="Hindu" /> Hindu
                            </div>
                          </div>
                          
                        <ul><label for="">Kewarganegaraan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="kewargaan_ayah" id="kewargaan_ayah" value="Warga Negara Indonesia(WNI)" required /> Warga Negara Indonesia(WNI) &nbsp &nbsp
                            <input type="radio" class="flat" name="kewargaan_ayah" id="kewargaan_ayah" value="Warga Negara Asing(WNA)" /> Warga Negara Asing(WNA)
                              </div>
                            </div>
                          </div>
                          
                        <ul><label for="">Pendidikan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="SD"  required /> SD &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="SMP" required /> SMP &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="SMA/SMK/sederajat" required /> SMA/SMK/sederajat <br>
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="D1" required /> D1 &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="D2" required /> D2 &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="D3"  required /> D3 <br>
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="S1 (Sarjana)"  required /> S1 (Sarjana) &nbsp &nbsp
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="S2 (Master)"  required /> S2(Magister) &nbsp &nbsp &nbsp &nbsp&nbsp
                            <input type="radio" class="flat" name="pend_ayah" id="pend_ayah" value="S3 (Doktor)"  required /> S3 (Doktor)
                              </div>
                            </div>
                          </div>  

                        <ul><label for="">Pekerjaan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Petani/beternak" required /> Petani/beternak &nbsp &nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="PNS"  required /> PNS &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Dokter"  required /> Dokter <br>
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Pegawai Swasta"  required /> Pegawai Swasta &nbsp &nbsp&nbsp
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Artis/seni/sejenis"  required /> Artis/seni/sejenis &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="warga" id="pekerjaan_ayah" value="ABRI"  required /> ABRI <br>
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pend" value="Buruh"  required /> Buruh &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Guru/dosen"  required /> Guru/dosen &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Politikus"  required /> Politikus <br>
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Pedagang"  required /> Pedagang &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Wiraswasta"  required /> Wiraswasta &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp 
                            <input type="radio" class="flat" name="pekerjaan_ayah" id="pekerjaan_ayah" value="Lain-lain"  required /> Lain-lain
                              </div>
                            </div>
                          </div>

                          <ul><label for="">Penghasilan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan Rata-rata/bulan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="penghasilan_ayah" id="penghasilan_ayah" value="Kurang dari Rp. 500.000" required /> Kurang dari Rp. 500.000 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="penghasilan_ayah" id="penghasilan_ayah" value="Rp. 500.000 - Rp. 1.000.000"  required /> Rp. 500.000 - Rp. 1.000.000  <br>
                            <input type="radio" class="flat" name="penghasilan_ayah" id="penghasilan_ayah" value="Rp. 1.000.000 - Rp. 3.000.000"  required /> Rp. 1.000.000 - Rp. 3.000.000 &nbsp &nbsp
                            <input type="radio" class="flat" name="penghasilan_ayah" id="penghasilan_ayah" value="Rp. 3.000.000 - Rp. 5.000.000" required /> Rp. 3.000.000 - Rp. 5.000.000 <br>
                            <input type="radio" class="flat" name="penghasilan_ayah" id="penghasilan_ayah" value="Lebih dari Rp. 5.000.000"  required /> Lebih dari Rp. 5.000.000
                              </div>
                            </div>
                          </div>

                          <ul><label for="">Alamat </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Rumah</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="alamat_ayah" id="alamat_ayah" cols="1" rows="2" placeholder="Alamat Rumah"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Kantor</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="kantor_ayah" id="kantor_ayah" cols="1" rows="2" placeholder="Alamat Kantor"></textarea>
                            </div>
                          </div>

                          <ul><label for="">Organisasi </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengalaman Organisasi <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="organisasi_ayah" name="organisasi_ayah" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Persatuan Guru Republik Indonesia(PGRI)">
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- ENDFORM 2 -->

                      <!-- FORM 3 -->
                      <div id="step-3">
                       <form class="form-horizontal form-label-left">
                       <ul><h2>*. IBU KANDUNG</h2></ul>
                          <ul><label for="">Nama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nl_ibu" name="nl_ibu" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Siti Aisyah">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat / Tanggal lahir <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="ttl_ibu" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Badru">
                            </div>
                          </div>

                          
                      <ul><label for="">Agama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Agama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="radio" class="flat" name="agama_ibu" id="agama_ibu" value="Islam" /> Islam &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_ibu" id="agama_ibu" value="Kristen" /> Kristen <br>
                              <input type="radio" class="flat" name="agama_ibu" id="agama_ibu" value="Budha" /> Budha &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_ibu" id="agama_ibu" value="Hindu" /> Hindu
                            </div>
                          </div>
                          
                        <ul><label for="">Kewarganegaraan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="kewargaan_ibu" id="kewargaan_ibu" value="Warga Negara Indonesia(WNI)" required /> Warga Negara Indonesia(WNI) &nbsp &nbsp
                            <input type="radio" class="flat" name="kewargaan_ibu" id="kewargaan_ibu" value="Warga Negara Asing(WNA)" /> Warga Negara Asing(WNA)
                              </div>
                            </div>
                          </div>
                          
                        <ul><label for="">Pendidikan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="SD"  required /> SD &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="SMP" required /> SMP &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="SMA/SMK/sederajat" required /> SMA/SMK/sederajat <br>
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="D1" required /> D1 &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="D2" required /> D2 &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="D3"  required /> D3 <br>
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="S1 (Sarjana)"  required /> S1 (Sarjana) &nbsp &nbsp
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="S2 (Master)"  required /> S2(Magister) &nbsp &nbsp &nbsp &nbsp&nbsp
                            <input type="radio" class="flat" name="pend_ibu" id="pend_ibu" value="S3 (Doktor)"  required /> S3 (Doktor)
                              </div>
                            </div>
                          </div>  

                        <ul><label for="">Pekerjaan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Petani/beternak" required /> Petani/beternak &nbsp &nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="PNS"  required /> PNS &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Dokter"  required /> Dokter <br>
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Pegawai Swasta"  required /> Pegawai Swasta &nbsp &nbsp&nbsp
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Artis/seni/sejenis"  required /> Artis/seni/sejenis &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="warga" id="pekerjaan_ibu" value="ABRI"  required /> ABRI <br>
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pend" value="Buruh"  required /> Buruh &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Guru/dosen"  required /> Guru/dosen &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Politikus"  required /> Politikus <br>
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Pedagang"  required /> Pedagang &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Wiraswasta"  required /> Wiraswasta &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp 
                            <input type="radio" class="flat" name="pekerjaan_ibu" id="pekerjaan_ibu" value="Lain-lain"  required /> Lain-lain
                              </div>
                            </div>
                          </div>

                          <ul><label for="">Penghasilan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan Rata-rata/bulan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="penghasilan_ibu" id="penghasilan_ibu" value="Kurang dari Rp. 500.000" required /> Kurang dari Rp. 500.000 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="penghasilan_ibu" id="penghasilan_ibu" value="Rp. 500.000 - Rp. 1.000.000"  required /> Rp. 500.000 - Rp. 1.000.000  <br>
                            <input type="radio" class="flat" name="penghasilan_ibu" id="penghasilan_ibu" value="Rp. 1.000.000 - Rp. 3.000.000"  required /> Rp. 1.000.000 - Rp. 3.000.000 &nbsp &nbsp
                            <input type="radio" class="flat" name="penghasilan_ibu" id="penghasilan_ibu" value="Rp. 3.000.000 - Rp. 5.000.000" required /> Rp. 3.000.000 - Rp. 5.000.000 <br>
                            <input type="radio" class="flat" name="penghasilan_ibu" id="penghasilan_ibu" value="Lebih dari Rp. 5.000.000"  required /> Lebih dari Rp. 5.000.000
                              </div>
                            </div>
                          </div>

                          <ul><label for="">Alamat </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Rumah</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="alamat_ibu" id="alamat_ibu" cols="1" rows="2" placeholder="Alamat Rumah"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Kantor</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="kantor_ibu" id="kantor_ibu" cols="1" rows="2" placeholder="Alamat Kantor"></textarea>
                            </div>
                          </div>

                          <ul><label for="">Organisasi </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengalaman Organisasi <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="organisasi_ibu" name="organisasi_ibu" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Persatuan Guru Republik Indonesia(PGRI)">
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- ENDFORM 3 -->

                      <!-- FORM 4 -->
                      <div id="step-4">
                       <form class="form-horizontal form-label-left">
                       <ul><h2>*. WALI SISWA</h2></ul>
                          <ul><label for="">Nama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nl_wali" name="nl_wali" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Adi Sucipto">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat / Tanggal lahir <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="ttl_wali" name="ttl_wali" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Badru">
                            </div>
                          </div>

                          
                      <ul><label for="">Agama </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Agama <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="radio" class="flat" name="agama_wali" id="agama_wali" value="Islam" /> Islam &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_wali" id="agama_wali" value="Kristen" /> Kristen <br>
                              <input type="radio" class="flat" name="agama_wali" id="agama_wali" value="Budha" /> Budha &nbsp &nbsp
                              <input type="radio" class="flat" name="agama_wali" id="agama_wali" value="Hindu" /> Hindu
                            </div>
                          </div>
                          
                        <ul><label for="">Kewarganegaraan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="kewargaan_wali" id="kewargaan_wali" value="Warga Negara Indonesia(WNI)" required /> Warga Negara Indonesia(WNI) &nbsp &nbsp
                            <input type="radio" class="flat" name="kewargaan_wali" id="kewargaan_wali" value="Warga Negara Asing(WNA)" /> Warga Negara Asing(WNA)
                              </div>
                            </div>
                          </div>
                          
                        <ul><label for="">Pendidikan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="SD"  required /> SD &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="SMP" required /> SMP &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="SMA/SMK/sederajat" required /> SMA/SMK/sederajat <br>
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="D1" required /> D1 &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="D2" required /> D2 &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="D3"  required /> D3 <br>
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="S1 (Sarjana)"  required /> S1 (Sarjana) &nbsp &nbsp
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="S2 (Master)"  required /> S2(Magister) &nbsp &nbsp &nbsp &nbsp&nbsp
                            <input type="radio" class="flat" name="pend_wali" id="pend_wali" value="S3 (Doktor)"  required /> S3 (Doktor)
                              </div>
                            </div>
                          </div>  

                        <ul><label for="">Pekerjaan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Petani/beternak" required /> Petani/beternak &nbsp &nbsp&nbsp&nbsp
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="PNS"  required /> PNS &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Dokter"  required /> Dokter <br>
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Pegawai Swasta"  required /> Pegawai Swasta &nbsp &nbsp&nbsp
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Artis/seni/sejenis"  required /> Artis/seni/sejenis &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="warga" id="pekerjaan_wali" value="ABRI"  required /> ABRI <br>
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pend" value="Buruh"  required /> Buruh &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Guru/dosen"  required /> Guru/dosen &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Politikus"  required /> Politikus <br>
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Pedagang"  required /> Pedagang &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Wiraswasta"  required /> Wiraswasta &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp 
                            <input type="radio" class="flat" name="pekerjaan_wali" id="pekerjaan_wali" value="Lain-lain"  required /> Lain-lain
                              </div>
                            </div>
                          </div>

                          <ul><label for="">Penghasilan </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan Rata-rata/bulan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="penghasilan_wali" id="penghasilan_wali" value="Kurang dari Rp. 500.000" required /> Kurang dari Rp. 500.000 &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp
                            <input type="radio" class="flat" name="penghasilan_wali" id="penghasilan_wali" value="Rp. 500.000 - Rp. 1.000.000"  required /> Rp. 500.000 - Rp. 1.000.000  <br>
                            <input type="radio" class="flat" name="penghasilan_wali" id="penghasilan_wali" value="Rp. 1.000.000 - Rp. 3.000.000"  required /> Rp. 1.000.000 - Rp. 3.000.000 &nbsp &nbsp
                            <input type="radio" class="flat" name="penghasilan_wali" id="penghasilan_wali" value="Rp. 3.000.000 - Rp. 5.000.000" required /> Rp. 3.000.000 - Rp. 5.000.000 <br>
                            <input type="radio" class="flat" name="penghasilan_wali" id="penghasilan_wali" value="Lebih dari Rp. 5.000.000"  required /> Lebih dari Rp. 5.000.000
                              </div>
                            </div>
                          </div>

                          <ul><label for="">Alamat </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Rumah</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="alamat_wali" id="alamat_wali" cols="1" rows="2" placeholder="Alamat Rumah"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Kantor</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="kantor_wali" id="kantor_wali" cols="1" rows="2" placeholder="Alamat Kantor"></textarea>
                            </div>
                          </div>

                          <ul><label for="">Organisasi </label></ul>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengalaman Organisasi <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="organisasi_wali" name="organisasi_wali" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Persatuan Guru Republik Indonesia(PGRI)">
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- ENDFORM 4 -->


                      <!-- FORM 5 -->
                      <div id="step-5">
                        <form class="form-horizontal form-label-left">
                           <h3>B. DATA KEMAMPUAN SISWA</h3>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pelaksanaan sholat lima waktu</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="sholat_siswa" id="sholat_siswa" value="Belum pernah" required /> Belum pernah &nbsp &nbsp
                            <input type="radio" class="flat" name="sholat_siswa" id="sholat_siswa" value="Kadang-kadang "  required /> Kadang-kadang  &nbsp &nbsp
                            <input type="radio" class="flat" name="sholat_siswa" id="sholat_siswa" value="Rutin"  required /> Rutin
                              </div>
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Surat yang sudah di hafal <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="hafalan_siswa" id="hafalan_siswa" cols="1" rows="2" placeholder="Contoh : Al-kahfi,An-Naba, Abasa. "></textarea>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan membaca al-quran</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                            <input type="radio" class="flat" name="bacaan_siswa" id="bacaan_siswa" value="Belum bisa" required /> Belum bisa &nbsp &nbsp
                            <input type="radio" class="flat" name="bacaan_siswa" id="bacaan_siswa" value="Kurang lancar "  required /> Kurang lancar  &nbsp &nbsp
                            <input type="radio" class="flat" name="bacaan_siswa" id="bacaan_siswa" value="lancar"  required /> lancar
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hobby/kesukaan anak <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="hoby_siswa" id="hoby_siswa" cols="1" rows="2" placeholder="Contoh : Menulis, bermain sepak bola. "></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Prestasi yang pernah di raih <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="prestasi_siswa" id="prestasi_siswa" cols="1" rows="2" placeholder="Contoh : Juara 1 Lomba bahasa, Juara 3 Tahfidz tingkat kecamatan. "></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Karakteristik / sifat anak yang perlu di perhatikan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="karakter_siswa" id="karakter_siswa" cols="1" rows="2" placeholder="Contoh : Manja, sulit bangun subuh. "></textarea>
                            </div>
                          </div>

                          <h3>B. DATA KESEHATAN SISWA</h3>
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penyakit keras / kecelakaan yang pernah diderita <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="kesehatan_siswa" id="kesehatan_siswa" cols="1" rows="2" placeholder="Contoh :1 Patah kaki 2. Jantung. "></textarea>
                            </div>
                          </div>
                        </form>
                      </div>


                      <div id="step-6">
                      <form class="form-horizontal form-label-left">
                      <h4>Bismillahirrahmanirrahiim</h4>
                        <h2><center>SURAT PERNYATAAN PELIMPAHAN PENDIDIKAN</center></h2>
                        <h2><center>DAN KESEDIAAN DANA ORANG TUA/WALI CALON SISWA</center></h2>
                        <h2><center>TAHUN PELAJARAN 2017/2018</center></h2>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Pendaaftaran <span class="required">*</span>
                            </label>
                            <img src="<?= base_url(); ?>assets/build/img/2.png" alt="">
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Orang Tua <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="ortu_surat" name="ortu_surat" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Badrussalam S.Pd">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="alamat_surat" id="alamat_surat" cols="1" rows="2" placeholder="Contoh :Desa sukorejo, jl. patimura no.20, sukorejo-jawa tengah. "></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Telepon/Handphone</label>
                            <div class="col-md-3 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="hp_surat" name="hp_surat" data-inputmask="'mask' : '**** - **** - ****'">
                              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Orang Tua/Wali calon siswa dari <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="siswa_surat" name="siswa_surat" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Fauzan kamil">
                            </div>
                        </div>

                        <p>Dengan ikhlas menginfaqan dana pendidikan kepada Pesanren Tahdizul Qur'am Al Azzam SMP IT Bina Insani :</p>
                        <ol>
                          <li class="col-md-3">Paket Pendidikan</li><span class="glyphicon glyphicon-check"> Rp. 1.700.00</span> <br>
                          <li class="col-md-3">Bahan Seragam santri ( 4 stel )</li><span class="glyphicon glyphicon-check"> Rp. 900.000</span> <br>
                          <li class="col-md-3">Perkap Asrama</li><span class="glyphicon glyphicon-check"> Rp. 3.000.000</span> <br>
                          <li class="col-md-3">Wakaf Pembangunan</li><span class="glyphicon glyphicon-check"> Rp. 4.000.000</span> <br>
                          <li class="col-md-3">Uang Syariah Bulan Juli</li><span class="glyphicon glyphicon-check"> Rp. 975.000</span> <br> <br> <br>
                          <strong><ul class="col-md-3">Jumlah Total</ul><span class="glyphicon glyphicon-flag"> Rp. 10.575.000</span></strong>
                        </ol>
                        <h3><strong>CATATAN :</strong></h3>
                        <ul type="A">
                        <li>Penyelesaian Kesediaan Dana Pendidikan tersebut di atas dengan ketentuan sebagai berikut :
                          <ul style="list-style-type:none">
                            <li>
                              Pembayaran pertama saat daftar ulang menyelesaikan:
                           <ol type="a">
                            <li> 50% Paket Pendidikan</li>
                            <li> 100% Biaya Seragam</li>
                            <li> 100% Perkap Agama</li>
                            <li>50% Wakaf Pembangunan</li>
                            <li>100% Uang Syahriah bulan juli</li>
                          </ol>
                            </li>
                          </ul>
                        </li>
                        <li>Selaku Orang Tua/Wali siswa tersebut dengan sungguh-sungguh dan penuh kesadaran kami menyatakan bahwa :
                        <ol>
                          <li>Menyerahkan sepenuhnya pendidikan calon siswa kepada pihak sekolah.</li>
                          <li>Bersedia membimbing dan mengawasi calon siswa tersebut di lingkungan dan masyarakat.</li>
                          <li>Apabila terjadi pengunduran diri pada putra/putri kami, maka 50% biaya administrasi yang sudah kami infaqkan kepada SMP IT Bina Insani.</li>
                        </ol>
                        </li>
                        </ul>
                        <p>Demikian penyataan ini kami buat, semoga memberikan manfaat yang sebesar-besarnya pada pendidikan putra/putri kami dan mendapatkan ridho Allah Subhanallahu Wa Ta'ala. Amin</p>
                        <br><br><br>
                        <div style="text-align: right">
                        <p class="text-center">Semarang, ...........2017</p>
                        <p class="text-center">Yang membuat pernyataan,</p> <br><br><br><br>
                        <p class="text-center">( .................... )</p>
                        </div>
                        
                        </form>
                      </div>

                      <div id="step-7">
                        <h1><center> KARTU PENDAFTARAN</center></h1>
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Pendaaftaran <span class="required">*</span>
                              </label>
                              <img src="<?= base_url(); ?>assets/build/img/3.png" alt="">
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Calon Siswa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="siswa_kartu" name="siswa_kartu" required="required" class="form-control col-md-7 col-xs-12" placeholder="Contoh: Fauzan kamil">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="alamat_kartu" id="alamat_kartu" cols="1" rows="2" placeholder="Contoh :Desa sukorejo, jl. patimura no.20, sukorejo-jawa tengah. "></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Telepon/Handphone</label>
                            <div class="col-md-3 col-sm-9 col-xs-9">
                              <input type="text" class="form-control" id="hp_kartu" name="hp_kartu" data-inputmask="'mask' : '**** - **** - ****'">
                              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                          
                          <form id="uploadimage" action="<?= site_url('Pendaftaran/input') ?>" method="post" enctype="multipart/form-data">
                          <span>Foto 3x4</span>
                          <div id="image_preview">
                            <img id="previewing" src="<?= base_url(); ?>assets/build/img/sample.png" class="img-thumbnail float-right" alt="...">
                          </div>
                          <hr id="line">
                          <div id="selectImage">
                            <label>Select Your Image</label><br/>
                            <input type="file" class="btn-xs btn-danger" name="file" id="file" required />
                            <!-- <input type="text" name="text"> -->
                            <!-- <input type="submit"> -->
                         <!--    <button id="upload">Upload</button> -->
                          </div>
                          </form> 
                        </div>

                        </form>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
               </div>
                </div>
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy Developed by <a href="https://neticx.github.io">Neticx</a>
          </div>
          <div class="text-center">
            <strong> Pesantren Tahfidzul Qur'an Al 'Azzam </strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- <div class="pop-up">
      <img src="<?php echo base_url();?>assets/build/img/banner.png" alt="">
    </div> -->
 <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?= base_url(); ?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- jquery.inputmask -->
    <script src="<?= base_url(); ?>assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?= base_url(); ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/datepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <!-- <script src="<?= base_url(); ?>assets/build/js/custom.min.js"></script> -->
    <!-- jQuery Smart Wizard -->


    <script type="text/javascript">
    function upload() {
                    var file_data = $('#file').prop('files')[0];
                    var form_data = new FormData();

                    form_data.append('file', file_data);
                    $.ajax({
                        url: '<?= site_url('Pendaftaran/upload_file'); ?>', // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                             // variabel untuk siswa
                    var nl_siswa = $('#nl_siswa').val();
                    var np_siswa = $('#np_siswa').val();
                    var jk_siswa = $('#kelamin_siswa:checked').val();
                    var tmp_lahir = $('#tempat_siswa').val();
                    var tgl_lahir = $('#tanggal_siswa').val();
                    var agama_siswa = $('#agama_siswa:checked').val();
                    var asal_sekolah = $('#asal_sekolah').val();
                    var ijazah = $('#no_ijazah').val();
                    var nisn = $('#nisn').val();
                    var nik = $('#nik').val();
                    var skhun = $('#skhun').val();
                    var warga_siswa = $('#kewargaan_siswa:checked').val();
                    var anak_ke = $('#saudara_kan').val();
                    var sdr_knd = $('#saudara_kan').val();
                    var sdr_tir = $('#saudara_tir').val();
                    var sdr_ang = $('#saudara_ang').val();
                    var bahasa = $('#bahasa_siswa').val();
                    var berat = $('#berat_siswa').val();
                    var tinggi = $('#tinggi_siswa').val();
                    var gol_dar = $('#goldar_siswa:checked').val();
                    var penyakit = $('#penyakit_siswa').val();
                    var alamat_siswa = $('#alamat_siswa').val();
                    var kode_pos = $('#kode_pos').val();
                    var hp_siswa = $('#nohp_siswa').val();
                    var tinggal = $('#tinggal_siswa').val();

                    // vairable untuk Ayah

                    var nl_ayah = $('#nl_ayah').val();
                    var ttl_ayah = $('#ttl_ayah').val();
                    var agama_ayah = $('#agama_ayah:checked').val();
                    var warga_ayah = $('#kewargaan_ayah').val();
                    var pend_ayah = $('#pend_ayah:checked').val();
                    var kerja_ayah = $('#pekerjaan_ayah:checked').val();
                    var gaji_ayah = $('#penghasilan_ayah:checked').val();
                    var rumah_ayah = $('#alamat_ayah').val();
                    var kantor_ayah = $('#kantor_ayah').val();
                    var organisasi_ayah = $('#organisasi_ayah').val();

                    // vairable untuk ibu

                    var nl_ibu = $('#nl_ibu').val();
                    var ttl_ibu = $('#ttl_ibu').val();
                    var agama_ibu = $('#agama_ibu:checked').val();
                    var warga_ibu = $('#kewargaan_ibu').val();
                    var pend_ibu = $('#pend_ibu:checked').val();
                    var kerja_ibu = $('#pekerjaan_ibu:checked').val();
                    var gaji_ibu = $('#penghasilan_ibu:checked').val();
                    var rumah_ibu = $('#alamat_ibu').val();
                    var kantor_ibu = $('#kantor_ibu').val();
                    var organisasi_ibu = $('#organisasi_ibu').val();

                    // vairable untuk Wali

                    var nl_wali = $('#nl_wali').val();
                    var ttl_wali = $('#ttl_wali').val();
                    var agama_wali = $('#agama_wali:checked').val();
                    var warga_wali = $('#kewargaan_wali').val();
                    var pend_wali = $('#pend_wali:checked').val();
                    var kerja_wali = $('#pekerjaan_wali:checked').val();
                    var gaji_wali = $('#penghasilan_wali:checked').val();
                    var rumah_wali = $('#alamat_wali').val();
                    var kantor_wali = $('#kantor_wali').val();
                    var organisasi_wali = $('#organisasi_wali').val();

                    // variabel kemampuan
                    var sholat = $('#sholat_siswa:checked').val();
                    var hafalan = $('#hafalan_siswa').val();
                    var bacaan = $('#bacaan_siswa:checked').val();
                    var hobi = $('#hoby_siswa').val();
                    var prestasi = $('#prestasi_siswa').val();
                    var sifat = $('#karakter_siswa').val();
                    var penyakit_keras = $('#kesehatan_siswa').val();

                    // variabel Surat
                    
                    var nama_ortu = $('#ortu_surat').val();
                    var alamat_surat = $('#alamat_surat').val();
                    var handphone_surat = $('#hp_surat').val();
                    var ortu_dari = $('#siswa_surat').val();

                    // variabel kartu

                    var nama_siswa = $('#siswa_kartu').val();
                    var alamat_kartu = $('#alamat_kartu').val();
                    var handphone_kartu = $('#hp_kartu').val();
                    var ima = response;

                      $.ajax({
                        url: '<?= site_url('Pendaftaran/insert'); ?>',
                        dataType: 'html',
                        data: "foto="+ima+"&nl_siswa="+nl_siswa+"&np_siswa="+np_siswa+"&jk_siswa="+jk_siswa+"&tmp_lahir="+tmp_lahir+"&agama_siswa="+agama_siswa+"&tgl_lahir="+tgl_lahir+"&asal_sekolah="+asal_sekolah+"&ijazah="+ijazah+"&nisn="+nisn+"&nik="+nik+"&skhun="+skhun+"&warga_siswa="+warga_siswa+"&anak_ke="+anak_ke+"&sdr_knd="+sdr_knd+"&sdr_tir="+sdr_tir+"&sdr_ang="+sdr_ang+"&bahasa="+bahasa+"&berat="+berat+"&tinggi="+tinggi+"&gol_dar="+gol_dar+"&penyakit="+penyakit+"&alamat_siswa="+alamat_siswa+"&kode_pos="+kode_pos+"&hp_siswa="+hp_siswa+"&tinggal="+tinggal+"&nl_ayah="+nl_ayah+"&ttl_ayah="+ttl_ayah+"&agama_ayah="+agama_ayah+"&warga_ayah="+warga_ayah+"&pend_ayah="+pend_ayah+"&kerja_ayah="+kerja_ayah+"&gaji_ayah="+gaji_ayah+"&rumah_ayah="+rumah_ayah+"&kantor_ayah="+kantor_ayah+"&organisasi_ayah="+organisasi_ayah+"&nl_ibu="+nl_ibu+"&ttl_ibu="+ttl_ibu+"&agama_ibu="+agama_ibu+"&warga_ibu="+warga_ibu+"&pend_ibu="+pend_ibu+"&kerja_ibu="+kerja_ibu+"&gaji_ibu="+gaji_ibu+"&rumah_ibu="+rumah_ibu+"&kantor_ibu="+kantor_ibu+"&organisasi_ibu="+organisasi_ibu+"&nl_wali="+nl_wali+"&ttl_wali="+ttl_wali+"&agama_wali="+agama_wali+"&warga_wali="+warga_wali+"&pend_wali="+pend_wali+"&kerja_wali="+kerja_wali+"&gaji_wali="+gaji_wali+"&rumah_wali="+rumah_wali+"&kantor_wali="+kantor_wali+"&organisasi_wali="+organisasi_wali+"&sholat="+sholat+"&hafalan="+hafalan+"&bacaan="+bacaan+"&hobi="+hobi+"&prestasi="+prestasi+"&sifat="+sifat+"&penyakit_keras="+penyakit_keras+"&nama_ortu="+nama_ortu+"&alamat_surat="+alamat_surat+"&handphone_surat="+handphone_surat+"&ortu_dari="+ortu_dari+"&nama_siswa="+nama_siswa+"&alamat_kartu="+alamat_kartu+"&handphone_kartu="+handphone_kartu,
                        type: 'post',
                        success: function (data) {
                          var id = data;
                          $('#myModal').modal('show');
                           setInterval(function(){
                            window.location.assign("<?= site_url('Pendaftaran/cetak/'); ?>"+id);
                            },5000 );

                        }
                       })

                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the server
                        }
                    });
      }

        </script>

    <script>
      $(document).ready(function() {
        $('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success').attr('href', '#homes');
        $('.buttonPrevious').addClass('btn btn-primary').attr('href', '#homes');
        $('.buttonFinish').addClass('btn btn-default');
        $('.buttonNext').click(function(event) {
         $('html, body').animate({scrollTop:$('#homes').position().top}, 'slow');
        });
        $('.buttonPrevious').click(function(event) {
         $('html, body').animate({scrollTop:$('#homes').position().top}, 'slow');
        });
        $('.buttonFinish').click(function() {
            upload();
        });

      });
    </script>
      <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <!-- /jQuery Smart Wizard -->
        <!-- jQuery Tags Input -->
    <script>
      function onAddTag(tag) {
        alert("Added a tag: " + tag);
      }

      function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
      }

      function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
      }

      $(document).ready(function() {
        $('#penyakit_siswa').tagsInput({
          width: 'auto'
        });
      });
    </script>
    <script>
    </script>
    <!-- /jQuery Tags Input -->
  </body>
</html>