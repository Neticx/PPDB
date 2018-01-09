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
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Data Siswa</h3>
                                <fieldset>
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

                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label>Jenis Kelamin *</label>
                                            <div class="demo-radio-button">
                                                <input name="kelamin" type="radio" id="radio_30" class="with-gap radio-col-green" checked />
                                                <label for="radio_30">Laki Laki</label>
                                                <input name="kelamin" type="radio" id="radio_31" class="with-gap radio-col-pink" />
                                                <label for="radio_31">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Agama *</label>
                                            <div class="demo-radio-button">
                                                <input name="agama" type="radio" id="agama1" class="with-gap radio-col-green" checked />
                                                <label for="agama1">Islam</label>
                                                <input name="agama" type="radio" id="agama2" class="with-gap radio-col-green" />
                                                <label for="agama2">Kristen</label>
                                                <input name="agama" type="radio" id="agama3" class="with-gap radio-col-green" />
                                                <label for="agama3">Hindu</label>
                                                <input name="agama" type="radio" id="agama4" class="with-gap radio-col-green" />
                                                <label for="agama4">Budha</label>
                                            </div>
                                        </div>
                                    </div>
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
                                </fieldset>

                                <h3>Profile Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label">First Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="surnames" class="form-control" required>
                                            <label class="form-label">Last Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" required>
                                            <label class="form-label">Email*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label">Address*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input min="18" type="number" name="age" class="form-control" required>
                                            <label class="form-label">Age*</label>
                                        </div>
                                        <div class="help-info">The warning step will show up if age is less than 18</div>
                                    </div>
                                </fieldset>

                                <h3>Terms & Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>
