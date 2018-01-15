    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SMPIT BINA INSANI
                    <small>Tahun Ajaran 2018/2019</small>
                </h2>
            </div>
            
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FORMULIR PENDAFTARAN</h2>
                            <small>Form dengan tanda bintang (*) artinya wajib di isi</small>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" action="<?php echo site_url('pendaftaran/insert') ?>" method="POST" enctype="multipart/form-data">
                                <h3>Data Siswa</h3>
                                <fieldset>
                                <!-- nama -->
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                             <div class="form-line">
                                                   <input type="text" name="name" class="form-control" required>
                                                   <label class="form-label">Nama Lengkap*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="surname" class="form-control" required>
                                                   <label class="form-label">Nama Panggilan*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- kelamin&agama -->
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Jenis Kelamin *</label>
                                            <div class="demo-radio-button">
                                                <input name="kelamin" type="radio" id="radio_30" class="with-gap radio-col-green" value="Laki-laki" checked />
                                                <label for="radio_30">Laki Laki</label>
                                                <input name="kelamin" type="radio" id="radio_31" class="with-gap radio-col-pink" value="Perempuan" />
                                                <label for="radio_31">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Agama *</label>
                                            <div class="demo-radio-button">
                                                <input name="agama" type="radio" id="agama1" class="with-gap radio-col-green" value="Islam" checked />
                                                <label for="agama1">Islam</label>
                                                <input name="agama" type="radio" id="agama2" class="with-gap radio-col-green" value="Kristen" />
                                                <label for="agama2">Kristen</label>
                                                <input name="agama" type="radio" id="agama3" class="with-gap radio-col-green" value="Hindu" />
                                                <label for="agama3">Hindu</label>
                                                <input name="agama" type="radio" id="agama4" class="with-gap radio-col-green" value="Budha" />
                                                <label for="agama4">Budha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ttl&sekolah -->
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="ttl" class="form-control" required>
                                                   <label class="form-label">Tempat Tanggal Lahir*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="sekolah" class="form-control" required>
                                                   <label class="form-label">Sekolah Asal*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ijazah dll -->
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" id="ijazah" class="form-control" name="ijazah">
                                                   <label class="form-label">Nomor Ijazah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" id="nik" name="nik" class="form-control" required>
                                                   <label class="form-label">NIK*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" id="nisn" name="nisn" class="form-control" required>
                                                   <label class="form-label">NISN*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" id="skhun" name="skhun" class="form-control" >
                                                   <label class="form-label">SKHUN</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Kewarganegaraan *</label>
                                            <div class="demo-radio-button">
                                                <input name="kewarganegaraan" type="radio" id="kewarganegaraan1" class="with-gap radio-col-green" value="Warga Negara Indonesia(WNI)" checked />
                                                <label for="kewarganegaraan1">Warga Negara Indonesia(WNI)</label>
                                                <input name="kewarganegaraan" type="radio" id="kewarganegaraan2" class="with-gap radio-col-pink" value="Warga Negara Asing(WNA)" />
                                                <label for="kewarganegaraan2">Warga Negara Asing(WNA)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="number" name="anak_ke" class="form-control">
                                                   <label class="form-label">Anak Ke</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="number" name="kandung" class="form-control">
                                                   <label class="form-label">Saudara Kandung</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="number" name="tiri" class="form-control">
                                                   <label class="form-label">Saudara Tiri</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="number" name="angkat" class="form-control">
                                                   <label class="form-label">Saudara Angkat</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="bahasa" class="form-control" required>
                                                   <label class="form-label">Bahasa Sehari-hari*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="number" name="berat" class="form-control">
                                                   <label class="form-label">Berat Badan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="number" name="tinggi" class="form-control">
                                                   <label class="form-label">Tinggi Badan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Golongan Darah *</label>
                                            <div class="demo-radio-button">
                                                <input name="goldar" type="radio" id="goldar1" class="with-gap radio-col-green" value="A" checked />
                                                <label for="goldar1">A</label>
                                                <input name="goldar" value="B" type="radio" id="goldar2" class="with-gap radio-col-pink" />
                                                <label for="goldar2">B</label>
                                                <input name="goldar" type="radio" id="goldar3" class="with-gap radio-col-green" value="AB" />
                                                <label for="goldar3">AB</label>
                                                <input name="goldar" value="O" type="radio" id="goldar4" class="with-gap radio-col-pink" />
                                                <label for="goldar4">O</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label class="form-label">Penyakit Yang Pernah Diderita</label>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="penyakit" class="form-control" data-role="tagsinput" placeholder="pisahkan dengan koma(,)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Bertempat Tinggal Pada </label>
                                            <div class="demo-radio-button">
                                                <input name="tinggal" type="radio" id="tinggal1" class="with-gap radio-col-green" value="Orang Tua" />
                                                <label for="tinggal1">Orang Tua</label>
                                                <input name="tinggal" value="Menumpang" type="radio" id="tinggal2" class="with-gap radio-col-pink" />
                                                <label for="tinggal2">Menumpang</label>
                                                <input name="tinggal" type="radio" id="tinggal3" class="with-gap radio-col-green" value="Asrama" />
                                                <label for="tinggal3">Asrama</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamat" class="form-control" required>
                                                    <label class="form-label">Alamat Lengkap*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="kodepos" class="form-control">
                                                    <label class="form-label">Kode Pos</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="handphone" class="form-control">
                                                    <label class="form-label">Telephone/Handphone</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Data Orang Tua&Wali</h3>
                                <fieldset>
                                    <!-- nama ayah-->
                                    <div class="row clearfix">
                                        <h4>&nbsp&nbspAYAH</h4>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="namaayah" class="form-control" required>
                                                   <label class="form-label">Nama Lengkap*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="ttlayah" class="form-control" required>
                                                   <label class="form-label">Tempat Tanggal Lahir*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Agama *</label>
                                            <div class="demo-radio-button">
                                                <input name="agamaayah" type="radio" id="agamaayah1" class="with-gap radio-col-green" value="Islam" checked />
                                                <label for="agamaayah1">Islam</label>
                                                <input name="agamaayah" type="radio" id="agamaayah2" class="with-gap radio-col-green" value="Kristen" />
                                                <label for="agamaayah2">Kristen</label>
                                                <input name="agamaayah" type="radio" id="agamaayah3" class="with-gap radio-col-green" value="Hindu" />
                                                <label for="agamaayah3">Hindu</label>
                                                <input name="agamaayah" type="radio" id="agamaayah4" class="with-gap radio-col-green" value="Budha" />
                                                <label for="agamaayah4">Budha</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Kewarganegaraan *</label>
                                            <div class="demo-radio-button">
                                                <input name="kewarganegaraanayah" type="radio" id="kewarganegaraanayah1" class="with-gap radio-col-green" value="Warga Negara Indonesia(WNI)" checked />
                                                <label for="kewarganegaraanayah1">Warga Negara Indonesia(WNI)</label>
                                                <input name="kewarganegaraanayah" type="radio" id="kewarganegaraanayah2" class="with-gap radio-col-pink" value="Warga Negara Asing(WNA)" />
                                                <label for="kewarganegaraanayah2">Warga Negara Asing(WNA)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Pendidikan *</label>
                                            <div class="demo-radio-button">
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah1" class="with-gap radio-col-green" value="SD" checked />
                                                <label for="pendidikanayah1">SD</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah2" class="with-gap radio-col-green" value="SMP" />
                                                <label for="pendidikanayah2">SMP</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah3" class="with-gap radio-col-green" value="SMA/SMK/SEDERAJAT" />
                                                <label for="pendidikanayah3">SMA/SMK/SEDERAJAT</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah4" class="with-gap radio-col-green" value="D1" />
                                                <label for="pendidikanayah4">D1</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah5" class="with-gap radio-col-green" value="D2" />
                                                <label for="pendidikanayah5">D2</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah6" class="with-gap radio-col-green" value="D3" />
                                                <label for="pendidikanayah6">D3</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah7" class="with-gap radio-col-green" value="S1" />
                                                <label for="pendidikanayah7">S1</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah8" class="with-gap radio-col-green" value="S2" />
                                                <label for="pendidikanayah8">S2</label>
                                                <input name="pendidikanayah" type="radio" id="pendidikanayah9" class="with-gap radio-col-green" value="S3" />
                                                <label for="pendidikanayah9">S3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan *</label>
                                            <div class="demo-radio-button">
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah1" class="with-gap radio-col-green" value="Petani/Beternak" checked />
                                                <label for="pekerjaanayah1">Petani/Beternak</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah2" class="with-gap radio-col-green" value="PNS" />
                                                <label for="pekerjaanayah2">PNS</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah3" class="with-gap radio-col-green" value="Dokter" />
                                                <label for="pekerjaanayah3">Dokter</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah4" class="with-gap radio-col-green" value="Pegawai Swasta" />
                                                <label for="pekerjaanayah4">Pegawai Swasta</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah5" class="with-gap radio-col-green" value="Artis/Seni/Sejenis" />
                                                <label for="pekerjaanayah5">Artis/Seni/Sejenis</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah6" class="with-gap radio-col-green" value="ABRI" />
                                                <label for="pekerjaanayah6">ABRI</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah7" class="with-gap radio-col-green" value="Buruh" />
                                                <label for="pekerjaanayah7">Buruh</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah8" class="with-gap radio-col-green" value="Guru/Dosen" />
                                                <label for="pekerjaanayah8">Guru/Dosen</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah9" class="with-gap radio-col-green" value="Politikus" />
                                                <label for="pekerjaanayah9">Politikus</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah10" class="with-gap radio-col-green" value="Pedagang" />
                                                <label for="pekerjaanayah10">Pedagang</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah11" class="with-gap radio-col-green" value="Wiraswasta" />
                                                <label for="pekerjaanayah11">Wiraswasta</label>
                                                <input name="pekerjaanayah" type="radio" id="pekerjaanayah12" class="with-gap radio-col-green" value="Lain-lain" />
                                                <label for="pekerjaanayah12">Lain-lain</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan rata-rata(Perbulan) *</label>
                                            <div class="demo-radio-button">
                                                <input name="penghasilanayah" type="radio" id="penghasilanayah1" class="with-gap radio-col-green" value="Kurang dari Rp. 500.000" checked />
                                                <label for="penghasilanayah1">Kurang dari Rp. 500.000</label>
                                                <input name="penghasilanayah" type="radio" id="penghasilanayah2" class="with-gap radio-col-green" value="Rp. 500.000 - Rp. 1.000.000" />
                                                <label for="penghasilanayah2">Rp. 500.000 - Rp. 1.000.000</label>
                                                <input name="penghasilanayah" type="radio" id="penghasilanayah3" class="with-gap radio-col-green" value="Rp. 1.000.000 - Rp. 3.000.000" />
                                                <label for="penghasilanayah3">Rp. 1.000.000 - Rp. 3.000.000</label>
                                                <input name="penghasilanayah" type="radio" id="penghasilanayah4" class="with-gap radio-col-green" value="Rp. 3.000.000 - Rp. 5.000.000" />
                                                <label for="penghasilanayah4">Rp. 3.000.000 - Rp. 5.000.000</label>
                                                <input name="penghasilanayah" type="radio" id="penghasilanayah5" class="with-gap radio-col-green" value="Lebih dari Rp. 5.000.000" />
                                                <label for="penghasilanayah5">Lebih dari Rp. 5.000.000</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatrumah" class="form-control" required>
                                                   <label class="form-label">Alamat Rumah*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatkantorayah" class="form-control" >
                                                   <label class="form-label">Alamat Kantor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="organisasiayah" class="form-control" >
                                                   <label class="form-label">Pengalaman Organisasi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nama ibu-->
                                    <div class="row clearfix">
                                        <h4>&nbsp&nbspIBU</h4>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="namaibu" class="form-control" required>
                                                   <label class="form-label">Nama Lengkap*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="ttlibu" class="form-control" required>
                                                   <label class="form-label">Tempat Tanggal Lahir*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Agama *</label>
                                            <div class="demo-radio-button">
                                                <input name="agamaibu" type="radio" id="agamaibu1" class="with-gap radio-col-green" value="Islam" checked />
                                                <label for="agamaibu1">Islam</label>
                                                <input name="agamaibu" type="radio" id="agamaibu2" class="with-gap radio-col-green" value="Kristen" />
                                                <label for="agamaibu2">Kristen</label>
                                                <input name="agamaibu" type="radio" id="agamaibu3" class="with-gap radio-col-green" value="Hindu" />
                                                <label for="agamaibu3">Hindu</label>
                                                <input name="agamaibu" type="radio" id="agamaibu4" class="with-gap radio-col-green" value="Budha" />
                                                <label for="agamaibu4">Budha</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Kewarganegaraan *</label>
                                            <div class="demo-radio-button">
                                                <input name="kewarganegaraanibu" type="radio" id="kewarganegaraanibu1" class="with-gap radio-col-green" value="Warga Negara Indonesia(WNI)" checked />
                                                <label for="kewarganegaraanibu1">Warga Negara Indonesia(WNI)</label>
                                                <input name="kewarganegaraanibu" type="radio" id="kewarganegaraanibu2" class="with-gap radio-col-pink" value="Warga Negara Asing(WNA)" />
                                                <label for="kewarganegaraanibu2">Warga Negara Asing(WNA)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Pendidikan *</label>
                                            <div class="demo-radio-button">
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu1" class="with-gap radio-col-green" value="SD" checked />
                                                <label for="pendidikanibu1">SD</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu2" class="with-gap radio-col-green" value="SMP" />
                                                <label for="pendidikanibu2">SMP</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu3" class="with-gap radio-col-green" value="SMA/SMK/SEDERAJAT" />
                                                <label for="pendidikanibu3">SMA/SMK/SEDERAJAT</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu4" class="with-gap radio-col-green" value="D1" />
                                                <label for="pendidikanibu4">D1</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu5" class="with-gap radio-col-green" value="D2" />
                                                <label for="pendidikanibu5">D2</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu6" class="with-gap radio-col-green" value="D3" />
                                                <label for="pendidikanibu6">D3</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu7" class="with-gap radio-col-green" value="S1" />
                                                <label for="pendidikanibu7">S1</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu8" class="with-gap radio-col-green" value="S2" />
                                                <label for="pendidikanibu8">S2</label>
                                                <input name="pendidikanibu" type="radio" id="pendidikanibu9" class="with-gap radio-col-green" value="S3" />
                                                <label for="pendidikanibu9">S3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan *</label>
                                            <div class="demo-radio-button">
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu6" class="with-gap radio-col-green" value="Ibu Rumah Tangga" checked />
                                                <label for="pekerjaanibu6">Ibu Rumah Tangga</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu1" class="with-gap radio-col-green" value="Petani/Beternak" />
                                                <label for="pekerjaanibu1">Petani/Beternak</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu2" class="with-gap radio-col-green" value="PNS" />
                                                <label for="pekerjaanibu2">PNS</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu3" class="with-gap radio-col-green" value="Dokter" />
                                                <label for="pekerjaanibu3">Dokter</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu4" class="with-gap radio-col-green" value="Pegawai Swasta" />
                                                <label for="pekerjaanibu4">Pegawai Swasta</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu5" class="with-gap radio-col-green" value="Artis/Seni/Sejenis" />
                                                <label for="pekerjaanibu5">Artis/Seni/Sejenis</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu7" class="with-gap radio-col-green" value="Buruh" />
                                                <label for="pekerjaanibu7">Buruh</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu8" class="with-gap radio-col-green" value="Guru/Dosen" />
                                                <label for="pekerjaanibu8">Guru/Dosen</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu9" class="with-gap radio-col-green" value="Politikus" />
                                                <label for="pekerjaanibu9">Politikus</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu10" class="with-gap radio-col-green" value="Pedagang" />
                                                <label for="pekerjaanibu10">Pedagang</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu11" class="with-gap radio-col-green" value="Wiraswasta" />
                                                <label for="pekerjaanibu11">Wiraswasta</label>
                                                <input name="pekerjaanibu" type="radio" id="pekerjaanibu12" class="with-gap radio-col-green" value="Lain-lain" />
                                                <label for="pekerjaanibu12">Lain-lain</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan rata-rata(Perbulan) *</label>
                                            <div class="demo-radio-button">
                                                <input name="penghasilanibu" type="radio" id="penghasilanibu1" class="with-gap radio-col-green" value="Kurang dari Rp. 500.000" checked />
                                                <label for="penghasilanibu1">Kurang dari Rp. 500.000</label>
                                                <input name="penghasilanibu" type="radio" id="penghasilanibu2" class="with-gap radio-col-green" value="Rp. 500.000 - Rp. 1.000.000" />
                                                <label for="penghasilanibu2">Rp. 500.000 - Rp. 1.000.000</label>
                                                <input name="penghasilanibu" type="radio" id="penghasilanibu3" class="with-gap radio-col-green" value="Rp. 1.000.000 - Rp. 3.000.000" />
                                                <label for="penghasilanibu3">Rp. 1.000.000 - Rp. 3.000.000</label>
                                                <input name="penghasilanibu" type="radio" id="penghasilanibu4" class="with-gap radio-col-green" value="Rp. 3.000.000 - Rp. 5.000.000" />
                                                <label for="penghasilanibu4">Rp. 3.000.000 - Rp. 5.000.000</label>
                                                <input name="penghasilanibu" type="radio" id="penghasilanibu5" class="with-gap radio-col-green" value="Lebih dari Rp. 5.000.000" />
                                                <label for="penghasilanibu5">Lebih dari Rp. 5.000.000</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatrumahibu" class="form-control" >
                                                   <label class="form-label">Alamat Rumah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatkantoribu" class="form-control" >
                                                   <label class="form-label">Alamat Kantor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="organisasiibu" class="form-control" >
                                                   <label class="form-label">Pengalaman Organisasi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nama wali-->
                                    <div class="row clearfix">
                                        <h4>&nbsp&nbspWALI</h4>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="namawali" class="form-control" required>
                                                   <label class="form-label">Nama Lengkap*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="ttlwali" class="form-control" required>
                                                   <label class="form-label">Tempat Tanggal Lahir*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Agama *</label>
                                            <div class="demo-radio-button">
                                                <input name="agamawali" type="radio" id="agamawali1" class="with-gap radio-col-green" value="Islam" checked />
                                                <label for="agamawali1">Islam</label>
                                                <input name="agamawali" type="radio" id="agamawali2" class="with-gap radio-col-green" value="Kristen" />
                                                <label for="agamawali2">Kristen</label>
                                                <input name="agamawali" type="radio" id="agamawali3" class="with-gap radio-col-green" value="Hindu" />
                                                <label for="agamawali3">Hindu</label>
                                                <input name="agamawali" type="radio" id="agamawali4" class="with-gap radio-col-green" value="Budha" />
                                                <label for="agamawali4">Budha</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Kewarganegaraan *</label>
                                            <div class="demo-radio-button">
                                                <input name="kewarganegaraanwali" type="radio" id="kewarganegaraanwali1" class="with-gap radio-col-green" value="Warga Negara Indonesia(WNI)" checked />
                                                <label for="kewarganegaraanwali1">Warga Negara Indonesia(WNI)</label>
                                                <input name="kewarganegaraanwali" type="radio" id="kewarganegaraanwali2" class="with-gap radio-col-pink" value="Warga Negara Asing(WNA)" />
                                                <label for="kewarganegaraanwali2">Warga Negara Asing(WNA)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <label>Pendidikan *</label>
                                            <div class="demo-radio-button">
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali1" class="with-gap radio-col-green" value="SD" checked />
                                                <label for="pendidikanwali1">SD</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali2" class="with-gap radio-col-green" value="SMP" />
                                                <label for="pendidikanwali2">SMP</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali3" class="with-gap radio-col-green" value="SMA/SMK/SEDERAJAT" />
                                                <label for="pendidikanwali3">SMA/SMK/SEDERAJAT</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali4" class="with-gap radio-col-green" value="D1" />
                                                <label for="pendidikanwali4">D1</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali5" class="with-gap radio-col-green" value="D2" />
                                                <label for="pendidikanwali5">D2</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali6" class="with-gap radio-col-green" value="D3" />
                                                <label for="pendidikanwali6">D3</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali7" class="with-gap radio-col-green" value="S1" />
                                                <label for="pendidikanwali7">S1</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali8" class="with-gap radio-col-green" value="S2" />
                                                <label for="pendidikanwali8">S2</label>
                                                <input name="pendidikanwali" type="radio" id="pendidikanwali9" class="with-gap radio-col-green" value="S3" />
                                                <label for="pendidikanwali9">S3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pekerjaan *</label>
                                            <div class="demo-radio-button">
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali1" class="with-gap radio-col-green" value="Petani/Beternak" checked/>
                                                <label for="pekerjaanwali1">Petani/Beternak</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali6" class="with-gap radio-col-green" value="Ibu Rumah Tangga"  />
                                                <label for="pekerjaanwali6">Ibu Rumah Tangga</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali2" class="with-gap radio-col-green" value="PNS" />
                                                <label for="pekerjaanwali2">PNS</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali3" class="with-gap radio-col-green" value="Dokter" />
                                                <label for="pekerjaanwali3">Dokter</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali4" class="with-gap radio-col-green" value="Pegawai Swasta" />
                                                <label for="pekerjaanwali4">Pegawai Swasta</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali5" class="with-gap radio-col-green" value="Artis/Seni/Sejenis" />
                                                <label for="pekerjaanwali5">Artis/Seni/Sejenis</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali7" class="with-gap radio-col-green" value="Buruh" />
                                                <label for="pekerjaanwali7">Buruh</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali8" class="with-gap radio-col-green" value="Guru/Dosen" />
                                                <label for="pekerjaanwali8">Guru/Dosen</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali9" class="with-gap radio-col-green" value="Politikus" />
                                                <label for="pekerjaanwali9">Politikus</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali10" class="with-gap radio-col-green" value="Pedagang" />
                                                <label for="pekerjaanwali10">Pedagang</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali11" class="with-gap radio-col-green" value="Wiraswasta" />
                                                <label for="pekerjaanwali11">Wiraswasta</label>
                                                <input name="pekerjaanwali" type="radio" id="pekerjaanwali12" class="with-gap radio-col-green" value="Lain-lain" />
                                                <label for="pekerjaanwali12">Lain-lain</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penghasilan rata-rata(Perbulan) *</label>
                                            <div class="demo-radio-button">
                                                <input name="penghasilanwali" type="radio" id="penghasilanwali1" class="with-gap radio-col-green" value="Kurang dari Rp. 500.000" checked />
                                                <label for="penghasilanwali1">Kurang dari Rp. 500.000</label>
                                                <input name="penghasilanwali" type="radio" id="penghasilanwali2" class="with-gap radio-col-green" value="Rp. 500.000 - Rp. 1.000.000" />
                                                <label for="penghasilanwali2">Rp. 500.000 - Rp. 1.000.000</label>
                                                <input name="penghasilanwali" type="radio" id="penghasilanwali3" class="with-gap radio-col-green" value="Rp. 1.000.000 - Rp. 3.000.000" />
                                                <label for="penghasilanwali3">Rp. 1.000.000 - Rp. 3.000.000</label>
                                                <input name="penghasilanwali" type="radio" id="penghasilanwali4" class="with-gap radio-col-green" value="Rp. 3.000.000 - Rp. 5.000.000" />
                                                <label for="penghasilanwali4">Rp. 3.000.000 - Rp. 5.000.000</label>
                                                <input name="penghasilanwali" type="radio" id="penghasilanwali5" class="with-gap radio-col-green" value="Lebih dari Rp. 5.000.000" />
                                                <label for="penghasilanwali5">Lebih dari Rp. 5.000.000</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatrumahwali" class="form-control" >
                                                   <label class="form-label">Alamat Rumah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatkantorwali" class="form-control" >
                                                   <label class="form-label">Alamat Kantor</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="organisasiwali" class="form-control" >
                                                   <label class="form-label">Pengalaman Organisasi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Tentang Siswa</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Pelasanaan Sholat 5 Waktu *</label>
                                            <div class="demo-radio-button">
                                                <input name="sholat" type="radio" id="sholat1" class="with-gap radio-col-green" value="Belum Pernah" checked />
                                                <label for="sholat1">Belum Pernah</label>
                                                <input name="sholat" type="radio" id="sholat2" class="with-gap radio-col-green" value="Kadang-Kadang" />
                                                <label for="sholat2">Kadang-Kadang</label>
                                                <input name="sholat" type="radio" id="sholat3" class="with-gap radio-col-green" value="Rutin" />
                                                <label for="sholat3">Rutin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Kemampuan Membaca Al-Quran *</label>
                                            <div class="demo-radio-button">
                                                <input name="quran" type="radio" id="quran1" class="with-gap radio-col-green" value="Belum Bisa" checked />
                                                <label for="quran1">Belum Bisa</label>
                                                <input name="quran" type="radio" id="quran2" class="with-gap radio-col-green" value="Kurang Lancar" />
                                                <label for="quran2">Kurang Lancar</label>
                                                <input name="quran" type="radio" id="quran3" class="with-gap radio-col-green" value="Lancar" />
                                                <label for="quran3">Lancar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="surat" class="form-control" >
                                                   <label class="form-label">Surat Yang Di Hafal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="hobi" class="form-control" >
                                                   <label class="form-label">Hobi/Kesukaan Anak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="prestasi" class="form-control" >
                                                   <label class="form-label">Prestasi yang pernah di raih</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="sifat" class="form-control" >
                                                   <label class="form-label">Karakteristik/Sifat yang perlu di perhatikan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="penyakitkeras" class="form-control" >
                                                   <label class="form-label">Penyakit keras/kecelakaan yang pernah diderita</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <h4>Upload Foto Siswa</h4>
                                        <div class="col-sm-12">
                                            <img src="<?= base_url(); ?>assets/build/img/sample.png" class="img-thumbnail float-right" alt="...">
                                            <input type="file" name="file">
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Pernyataan</h3>
                                <fieldset>
                                    <div class="row clearfix">
                                    <center>
                                        <h4>DATA INFORMASI SURAT PERNYATAAN PELIMPAHAN PENDIDIKAN</h4>
                                        <h4>DAN KESEDIAAN DANA ORANG TUA/WALI CALON SISWA</h4>
                                        <h4>TAHUN PELAJARAN 2018/2019</h4>
                                    </center>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="namapernyataan" class="form-control" >
                                                   <label class="form-label">Nama Orang Tua/Wali</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="alamatpernyataan" class="form-control" >
                                                   <label class="form-label">Alamat</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="teleponpernyataan" class="form-control" >
                                                   <label class="form-label">Nomor Telepon/Handphone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                   <input type="text" name="ortupernyataan" class="form-control" >
                                                   <label class="form-label">Orang Tua/Wali dari</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row clearfix"> -->
                                        <p>Dengan ikhlas menginfaqan dana pendidikan kepada Pesanren Tahdizul Qur'am Al Azzam SMP IT Bina Insani :</p>
                                        <ol>
                                          <li>Paket Pendidikan</li><span class="glyphicon glyphicon-check"> Rp. 1.700.00</span> <br>
                                          <li>Bahan Seragam santri ( 4 stel )</li><span class="glyphicon glyphicon-check"> Rp. 900.000</span> <br>
                                          <li>Perkap Asrama</li><span class="glyphicon glyphicon-check"> Rp. 3.000.000</span> <br>
                                          <li>Wakaf Pembangunan</li><span class="glyphicon glyphicon-check"> Rp. 4.000.000</span> <br>
                                          <li>Uang Syariah Bulan Juli</li><span class="glyphicon glyphicon-check"> Rp. 975.000</span> <br> <br> <br>
                                          <strong><ul>Jumlah Total</ul><span class="glyphicon glyphicon-flag"> Rp. 10.575.000</span></strong>
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
                                    <!-- </div> -->
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <input id="accept" name="accept" type="checkbox" required>
                                            <label for="accept">Saya Setuju.</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>
