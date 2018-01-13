
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SMPIT BINA INSANI
                    <small>Tahun Ajaran 2018/2019</a></small>
                </h2>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CETAK FORMULIR
                            </h2>
                            <span>Silahkan cari nama calon siswa di kolom search</span>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Tahun</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Asal Sekolah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Tahun</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Asal Sekolah</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($all as $value => $key):?>
                                    <tr>
                                        <td><?php echo $key->id_siswa;  ?></td>
                                        <td><?php echo $key->nl_siswa;  ?></td>
                                        <td><?php echo $key->tahun;  ?></td>
                                        <td><?php echo $key->ttl;  ?></td>
                                        <td><?php echo $key->alamat;  ?></td>
                                        <td><?php echo $key->asal_sekolah;  ?></td>
                                        <td>
                                            <a class="btn bg-green waves-effect" data-toggle="modal" data-target="#myModal<?php echo $key->id_siswa; ?>">
                                                <i class="material-icons">print</i>Cetak
                                            </a>
                                            <!-- Modal -->
                                            <div id="myModal<?php echo $key->id_siswa; ?>" class="modal fade" role="dialog">
                                              <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content modal-col-green">
                                                <form action="<?php echo site_url('pendaftaran/cek_valid/'.$key->id_siswa); ?>" method="POST">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Kode Cetak</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p>Silahkan Masukan Kode 8 digit untuk mencetak formulir.</p><span>Belum punya kode? hubungi admin.</span><br>
                                                    <div class="form-group form-group-lg">
                                                        <div class="form-line">
                                                           <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Disini" minlength="8" maxlength="8" required>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" >Cetak</button>
                                                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
                                                  </form>
                                                </div>

                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>